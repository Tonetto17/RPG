<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('conectadb.php');
    $email = $_POST['email'];
    $cod = $_POST['cod'];
    $pass = $_POST['senha'];

    if ($cod == "") {
        header("Location:redefine_senha.php?msg=Código Inválido!");
        exit();
    }

    $sql = "SELECT COUNT(usu_id) FROM usuarios WHERE usu_email = '$email' AND usu_token = '$cod'";
    $result = mysqli_query($link, $sql);

    while ($tbl = mysqli_fetch_array($result)) {
        $cont = $tbl[0];
    }
    if ($cont == 0) {
        $sql = "UPDATE usuarios SET usu_token = '' WHERE usu_email = '$email' ";
        mysqli_query($link, $sql);
        header("Location:recupera_senha.php?msg=Código Inválido! Solicite um novo código.");
    
        exit();
    }

    $result = mysqli_query($link, $sql);

    $nova_senha = $pass;
    $sql = "UPDATE usuarios SET usu_senha ='$nova_senha', usu_token = '' WHERE usu_email = '$email'";
    mysqli_query($link, $sql);
    header("Location:login.php?msg=Senha alterada com sucesso!");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefine senha</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="body-login">
    <div class="main-login">
        

        <div class="right-login">

            <div class="card-login">
                <h1 class="h1-login">Recuperação de senha</h1>
                <div class="textfield">
                    <form class="alinha" action="redefine_senha.php" method="POST">
                        <label for="email">
                            <h3>Email:</h3>
                        </label>
                        <input type="email" name="email" id="email" required>
                        <label for="cod">
                            <br>
                            <h3>Código:</h3>
                        </label>
                        <input type="text" name="cod" id="cod" required>
                        <label for="senha">
                            <br>
                            <h3>Senha:</h3>
                        </label>
                        <input type="password" name="senha" id="senha" required>
                        <br>
                        <input type="submit" value="Redefinir">
                        <br>
                    </form>
                    <br>
                    <p id="msg">
                        <?php
                        if (isset($_GET['msg'])) {
                            echo ($_GET['msg']);
                            if ($_GET['msg'] == "Usuario ou senha incorretos") {
                                echo ("<br><a href='recupera_senha.php'>Esqueci minha senha</a>");
                            }
                        }
                        ?>
                        </Main>
                    </p>
                </div>

            </div>

        </div>
    </div>
</body>

</html>