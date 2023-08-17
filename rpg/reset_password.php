<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter o email fornecido pelo formulário
    $email = $_POST["email"];

       // Defina as informações de conexão ao banco de dados
       $servername = "localhost";
       $username = "administrador"; // Nome do usuário do MySQL
       $password = "123"; // Senha do usuário do MySQL
       $dbname = "rpg";
   
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Verificar se o email existe no banco de dados
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE usu_email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user) {
            // Gerar um token de recuperação (exemplo simples)
            $token = bin2hex(random_bytes(32));

            // Atualizar o token na tabela de usuários
            $updateStmt = $conn->prepare("UPDATE usuarios SET usu_token = :token WHERE usu_email = :email");
            $updateStmt->bindParam(':token', $token);
            $updateStmt->bindParam(':email', $email);
            $updateStmt->execute();

            // Enviar email com o link de recuperação usando PHPMailer
            $resetLink = "http://seusite.com/reset_password_page.php?token=$token";
            $emailContent = "Olá " . $user['usu_nome'] . ",\n\nClique no link abaixo para redefinir sua senha:\n$resetLink";

            $mail = new PHPMailer(true);
            try {
                // Configurações do servidor SMTP (exemplo usando Gmail)
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'seu_email@gmail.com';
                $mail->Password = 'sua_senha';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                // Remetente e destinatário
                $mail->setFrom('seu_email@gmail.com', 'Seu Nome');
                $mail->addAddress($email, $user['usu_nome']);

                // Conteúdo do email
                $mail->Subject = 'Recuperação de Senha';
                $mail->Body = $emailContent;

                // Enviar o email
                $mail->send();
                echo "Um link de recuperação foi enviado para o seu email.";
            } catch (Exception $e) {
                echo "Erro ao enviar o email: " . $mail->ErrorInfo;
            }
        } else {
            echo "O email não foi encontrado em nosso sistema.";
        }
    } catch (PDOException $e) {
        echo "Erro na conexão com o banco de dados: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link das fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <!-- Final -->
    <link rel="icon" href="icones/Castelologo.png">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Recuperar Senha</h2>
        <form action="reset_password.php" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>


