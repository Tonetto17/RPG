<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["token"])) {
    $token = $_GET["token"];

     // Defina as informações de conexão ao banco de dados
     $servername = "localhost";
     $username = "administrador"; // Nome do usuário do MySQL
     $password = "123"; // Senha do usuário do MySQL
     $dbname = "rpg";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Verificar se o token existe na tabela de usuários
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE usu_token = :token");
        $stmt->bindParam(':token', $token);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Obter a nova senha fornecida pelo formulário
                $newPassword = $_POST["new_password"];

                // Armazenar a nova senha (substituir pela lógica segura)
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

                // Atualizar a senha e limpar o token na tabela de usuários
                $updateStmt = $conn->prepare("UPDATE usuarios SET usu_senha = :senha, usu_token = NULL WHERE usu_token = :token");
                $updateStmt->bindParam(':senha', $hashedPassword);
                $updateStmt->bindParam(':token', $token);
                $updateStmt->execute();

                echo "Senha redefinida com sucesso!";
            } else {
                // Exibir o formulário para redefinir a senha
                echo "<h2>Redefinir Senha</h2>";
                echo '<form action="" method="post">';
                echo 'Nova Senha: <input type="password" name="new_password" required><br><br>';
                echo '<input type="submit" value="Redefinir Senha">';
                echo '</form>';
            }
        } else {
            echo "Token inválido ou expirado.";
        }
    } catch (PDOException $e) {
        echo "Erro na conexão com o banco de dados: " . $e->getMessage();
    }
}
?>
