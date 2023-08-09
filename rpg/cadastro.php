<?php

    include("conectadb.php");

    if($_SERVER['REQUEST_METHOD']== 'POST')
    {
        $nome= $_POST ['nome'];
        $email = $_POST ['email'];
        $senha = $_POST ['senha'];

        $sql= "SELECT COUNT(usu_id) FROM usuarios WHERE usu_nome= '$nome' AND usu_email = '$email' AND usu_senha = '$senha'";
       
        $retorno = mysqli_query($link, $sql);

        while($tbl = mysqli_fetch_array($retorno))
        {
            $cont = $tbl[0];
        }

        if($cont == 1){
            echo"<script>window.alert('USUARIO JÁ EXISTE');</script>";
        }else{
            
            $sql= "INSERT INTO usuarios (usu_nome, usu_email, usu_senha, usu_nivel,  usu_ativo) VALUES ('$nome','$email', '$senha','0', 's')" ;
            mysqli_query($link, $sql);

            echo"<script>window.alert('USUARIO CADASTRADO');</script>";
            echo"<script>window.location.href='login.php';</script>";
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
    <link rel="icon" href="icones/Castelologo.png">
    <title>Cadastro</title>
</head>

<body class="body-login">
    <div class="main-login">
        <div class="left-login">
            <img class="left-login-image" src="imagem/magic-tree-animate.svg"  alt="imagem de uma pessoa">
        </div>
        <form action="cadastro.php" method="post">
        <div class="right-login">
          
            <div class="card-login">
                <h1 class="h1-login">Cadastro</h1>
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
                <input class="btn-login" type="submit" name="cadastro" value="Cadastro">
                <p>Já possui login? <a href="login.php">Faça login aqui</a></p>
                <p><a href="index.html">Volte para o menu </a></p>
              
            </div>
          
        </div>
        
    </div>
    </form>
    
</body>
</html>