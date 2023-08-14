<?php
include("conectadb.php");

session_start();
$nomeusuario = $_SESSION['nomeusuario'];

$id = isset($_GET['idusuario'])?$_GET['idusuario']:"0";
$sql = "SELECT * FROM usuarios WHERE usu_id= '$id'";
$retorno = mysqli_query($link, $sql);

#PREENCHA O ARRAY SEMPRE
while ($tbl = mysqli_fetch_array($retorno)) {
    $id = $tbl[0];
    $nome = $tbl[1];
    $email = $tbl[2];
    $senha = $tbl[3];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "UPDATE usuarios SET usu_nome = '$nome', usu_email= '$email', usu_senha= '$senha'WHERE usu_id= $id";

    mysqli_query($link, $sql);

    echo "<script>window.alert('USUARIO ALTERADO COM SUCESSO!');</script>";
    echo "<script>window.location.href='conteudo.php';</script>";
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="icon" href="icones/Castelologo.png">
    <title>Configurações de conta</title>
</head>

<body>
<header>
        <a href="#" class="logo"><i class='bx bxs-castle bx-flashing' ></i>REINOS PERDIDOS</a>

        <ul class="Links">
            <li><a href="conteudo.php" class="active">Inicio</a></li>
            <li><a href="alteracliente.php?idusuario=<?=$idusuario?>" class="active">Configurações</a></li>
            <li><a href="login.php" class="active">Sair</a></li>
            <?php
            #ABERTO O PHP PARA VALIDAR SE A SESSÃO DO USUARIO ESTÁ ABERTA
            # SE SESSÃO ABERTA, FECHA O PHP PARA USAR ELEMENTOS HTML
            if ($nomeusuario != null) {
                ?>
                <!--USO DE ELEMENTO HTML COM PHP INTERNO-->
                <a href="" class="active">
                    <li class="profile">Olá
                        <?= strtoupper($nomeusuario) ?>
                </a></li>
                <?php
                # ABERTURA DE OUTRO PHP PARA CASO FALSE
            } else {
                echo "<script>window.alert('USUARIO NÃO AUTENTICADO'); window.location.href='../login.php';</script>";
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
    <br>
    <div class="container">
        <form action="usuarioalterausuario.php" method="post">
            <div class="card">

                <a class="login">Alterar:</a>

                <input type="hidden" name="id" value="<?= $id ?>">


                <div class="inputBox">
                    
                        <input type="text" name="nome" id="nome" value="<?= $nome ?>" required>
                        <p></p>
                        <input type="text" name="email" id="email" value="<?= $email ?>" required>
                        <p></p>
                        <input type="password" name="senha" id="senha" value="<?= $senha ?>" required>
                        <p></p>

                </div>

                <input class="enter" type="submit" name="salvar" id="salvar" value="SALVAR">
            </div>
        </form>
    </div>

    <script src="script/script.js"></script>
</body>

</html>