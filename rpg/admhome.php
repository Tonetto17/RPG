<?php
    session_start();
    $nomeusuario = $_SESSION['nomeusuario'];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="icon" href="icones/Castelologo.png">
    <title>Administração</title>
</head>

<body >
    <header>
        <a href="#" class="logo"><i class='bx bxs-castle bx-flashing' ></i>REINOS PERDIDOS</a>

      
        <ul class="Links">
            <li><a href="configuraçoes.php" class="active">Altera usuario</a></li>
            <li><a href="conteudo.php" class="active">Conteudo cliente</a></li>
            <li><a href="login.php" class="active">Sair</a></li>
            <?php
             #ABERTO O PHP PARA VALIDAR SE A SESSÃO DO USUARIO ESTÁ ABERTA
             # SE SESSÃO ABERTA, FECHA O PHP PARA USAR ELEMENTOS HTML
                if($nomeusuario != null){
                    ?>
                    <!--USO DE ELEMENTO HTML COM PHP INTERNO-->
                    <li class="profile">Olá <?=strtoupper($nomeusuario)?></li>
                    <?php
                    # ABERTURA DE OUTRO PHP PARA CASO FALSE
                }else{
                    echo"<script>window.alert('USUARIO NÃO AUTENTICADO'); window.location.href='login.php';</script>";
                }
                # FIM DO PHP PARA CONTINUAR MEU HTML
                ?>
        </ul><!--Links-->
      
        <div class="h-main">
            <div class="bx bx-menu" id="menu-icon"></div>
            <div class="bx bx-moon" id="darkmode"></div>
            
        </div><!--h-main-->
    </header> 
    <!--Cabeçalho-->

   
    <script src="script/script.js"></script>
</body>
</html>