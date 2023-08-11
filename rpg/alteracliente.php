<?php
include("conectadb.php");

session_start();

$nomeusuario = $_SESSION['nomeusuario'];

$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE usu_id = '$id'";
$retorno = mysqli_query($link, $sql);

#PREENCHA O ARRAY SEMPRE
while ($tbl = mysqli_fetch_array($retorno)) {
    $nome = $tbl[1];
    $email = $tbl[2];
    $senha = $tbl[3];
    $nivel = $tbl[4];
    $ativo = $tbl[5];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nivel = $_POST['nivel'];
    $ativo = $_POST['ativo'];

    // Check if the logged-in user matches the user being modified
    if ($nomeusuario !== $nome) {
        echo "<script>window.alert('Você não tem permissão para modificar este usuário!');</script>";
        echo "<script>window.location.href='admhome.php';</script>";
        exit; // Stop further execution
    }

    $sql = "UPDATE usuarios SET usu_nome = '$nome', usu_email= '$email', usu_senha= '$senha', usu_nivel= '$nivel', usu_ativo= '$ativo' WHERE usu_id= $id";

    mysqli_query($link, $sql);

    echo "<script>window.alert('USUARIO ALTERADO COM SUCESSO!');</script>";
    echo "<script>window.location.href='admhome.php';</script>";
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
        <a href="#" class="logo"><i class='bx bxs-castle bx-flashing'></i>REINOS PERDIDOS</a>

        <ul class="Links">
            <li><a href="index.html" class="active">Inicio</a></li>
            <li><a href="sobre.html.php" class="active">Sobre</a></li>
            <li><a href="admhome.php" class="active">Voltar</a></li>
            <li><a href="login.php" class="active">Sair</a></li>
            <?php
            #ABERTO O PHP PARA VALIDAR SE A SESSÃO DO USUARIO ESTÁ ABERTA
            # SE SESSÃO ABERTA, FECHA O PHP PARA USAR ELEMENTOS HTML
            if ($nomeusuario != null) {
            ?>
                <!--USO DE ELEMENTO HTML COM PHP INTERNO-->
                <li class="profile">Olá
                    <?= strtoupper($nomeusuario) ?>
                </li>
            <?php
                # ABERTURA DE OUTRO PHP PARA CASO FALSE
            } else {
                echo "<script>window.alert('USUARIO NÃO AUTENTICADO'); window.location.href='login.php';</script>";
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
        <form action="alterausuario.php" method="post">
            <div class="card">

                <a class="login">Alterar:</a>

                <input type="hidden" name="id" value="<?= $id ?>">


                <div class="inputBox">
                    <form action="alterausuario.php" method="post">
                        <input type="text" name="nome" id="nome" value="<?= $nome ?>" required>
                        <p></p>
                        <input type="text" name="email" id="email" value="<?= $email ?>" required>
                        <p></p>
                        <input type="password" name="senha" id="senha" value="<?= $senha ?>" required>
                        <p></p>

                      
                    </form>
                </div>

                <input class="enter" type="submit" name="salvar" id="salvar" value="SALVAR">
            </div>
        </form>
    </div>

    <script src="script/script.js"></script>
</body>

</html>
