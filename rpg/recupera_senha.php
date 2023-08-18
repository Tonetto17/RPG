<?php
session_start();
include('conectadb.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "PHPMail/src/Exception.php";
require 'PHPMail/src/PHPMailer.php';
require 'PHPMail/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $sql = "SELECT COUNT(usu_id) FROM usuarios WHERE usu_email = ?";
    $stmt = $link->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $count = $stmt->get_result()->fetch_array()[0];
    if ($count != 0) {
        $recupera = rand();
        $sql = "UPDATE usuarios SET usu_token = ? WHERE usu_email = ?";
        $stmt = $link->prepare($sql);
        $stmt->bind_param("ss", $recupera, $email);
        $stmt->execute();

        // Código do envio de e-mail usando PHPMailer
        try {
            $to = $email;
            $subject = "Recuperação de Senha";
            $message = "Esse é o seu código de recuperação de senha: $recupera. <br> Acesse <a href='http://localhost/RPG/redefine_senha.php'>aqui</a> para recuperá-la";

            $mail = new PHPMailer(true);
            $mail->SetLanguage("br");

            date_default_timezone_set('America/Sao_Paulo');
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = "smtp.office365.com";
            $mail->SMTPAuth = true;
            $mail->Username = 'RPGTi22@outlook.com';
            $mail->Password = 'B1e2r3l4i5m6';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->CharSet = "UTF-8";

            $mail->setFrom('RPGTi22@outlook.com', 'RPGT122 Rpg');
            $mail->addAddress($to);

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();
            
            // Redirecionar após o envio
            header("Location: redefine_senha.php");
            exit();
            
        } catch (Exception $e) {
            echo "Não foi possível enviar o e-mail: {$mail->ErrorInfo}";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Recuperação de Senha</title>
</head>

<body class="body-login">
    <div class="main-login">
        <div class="right-login">
            <div class="card-login">
                <h1 class="h1-login">Recuperação de senha</h1>
                <div class="textfield">
                    <form action="recupera_senha.php" method="POST">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" required>
                        <input type="submit" value="Enviar">
                    </form>
                    <br>
                </div>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    echo "<script>alert('Código enviado!');</script>";
                }
                ?>
                </Main>
            </div>
        </div>
    </div>
</body>

</html>
