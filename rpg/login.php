<?php
    session_start();
    $nomeusuario;

    include("conectadb.php");

    if($_SERVER['REQUEST_METHOD']== 'POST')
    {
        
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $nome = $_POST['nome'];

        $sql = "SELECT COUNT(usu_id) FROM usuarios WHERE usu_email = '$email' AND usu_senha = '$senha'AND usu_nome= '$nome' AND usu_nivel= '0'";
        $retorno = mysqli_query($link, $sql);

        while($tbl = mysqli_fetch_array($retorno)){
            $cont = $tbl[0];
        }

        if($cont == 1){
            $sql = "SELECT * FROM usuarios WHERE  usu_email = '$email' AND usu_senha= '$senha' AND usu_nome= '$nome' AND usu_nivel= '0'";
            $_SESSION['nomeusuario']= $nome;

            echo"<script>window.location.href='conteudo.php';</script>";
        }else if($cont == 0){
            $sql = "SELECT * FROM usuarios WHERE  usu_email = '$email' AND usu_senha= '$senha' AND usu_nome= '$nome' AND usu_nivel= '1'";
            $_SESSION['nomeusuario']= $nome;
            
            echo"<script>window.location.href='admhome.php';</script>";
        }
        else{
            echo"<script>window.alert('EMAIL OU SENHA INCORRETO');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylelogin.css">

    <!-- Link das fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <!-- Final -->
    <title>Login</title>
</head>

<body class="body-login">
    <div class="main-login">
        <div class="left-login">
            <img class="left-login-image" src="imagem/login-imagem.svg"  alt="imagem de uma pessoa">
        </div>
        <form action="login.php" method="post">
        <div class="right-login">
           
            <div class="card-login">
                <h1 class="h1-login">Login</h1>
                <div class="textfield">
                    <label for="email">Nome:</label>
                    <input type="text" name="nome" placeholder="NOME" require>
                </div>
                <div class="textfield">
                    <label for="email">Email:</label>
                    <input type="text" name="email" placeholder="EMAIL" require>
                </div>
                <div class="textfield">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" placeholder="SENHA" require>
                </div>
                <input class="btn-login" type="submit" name="login" value="LOGIN">
               
                <p>Não possui cadastro? <a href="cadastro.php">Faça cadastro aqui</a></p>
                <p><a href="index.html">Volte para o menu </a></p>
                
               
            </div>
            
        </div>
        </form>
    </div>
    
    
</body>
</html>