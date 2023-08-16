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

        $to = $email;
        $subject = "Recuperação de Senha";
        $message = "Esse é o seu código de recuperação de senha: $recupera. <br> Acesse <a href='http://localhost/RPG/redefine_senha.php'>aqui</a> para recuperá-la";

        $mail = new PHPMailer(true);
        $mail->SetLanguage("br");

        try {
            date_default_timezone_set('America/Sao_Paulo');
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = "smtp.office365.com";
            $mail->SMTPAuth = true;
            $mail->Username = 'joanleninho@hotmail.com';
            $mail->Password = 'senha1234';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->CharSet = "UTF-8";

            $mail->setFrom('joanleninho@hotmail.com', 'RPG');
            $mail->addAddress($to);

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();
        } catch (Exception $e) {
            echo "Não foi possivel {$mail->ErrorInfo}";
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

<body class="logcad">
    <Main style="border-radius: 25px;" >
        <div class="alinha">
            <br>
            <form action="recupera_senha.php" method="POST">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>

                <input type="submit" value="Enviar">
            </form>
            <br>
        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        ?>
            <script>
                alert("Código enviado!")
            </script>
        <?php
            header("Location: redefine_senha.php");
            exit();
        }
        ?>
    </Main>
</body>

</html>