<?php
include("conectadb.php");
    session_start();
    $nomeusuario = $_SESSION['nomeusuario'];



$sql = "SELECT * FROM usuarios WHERE usu_ativo = 's'";
$retorno = mysqli_query($link, $sql);


$ativo = 's';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ativo = $_POST['ativo'];

  
    if ($ativo == 's') {
        $sql = "SELECT * FROM usuarios WHERE usu_ativo = 's'";
        $retorno = mysqli_query($link, $sql);
    } 
}
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
    <title>Configurações</title>
</head>
<body>
<header>
    <a href="#" class="logo"><i class='bx bxs-castle bx-flashing' ></i>REINOS PERDIDOS</a>

      
        <ul class="Links">
            <li><a href="index.html" class="active">Inicio</a></li>
            <li><a href="sobre.html">Sobre</a></li>
            <li><a href="admhome.php" class="active">Voltar</a></li>
            <li><a href="login.php" class="active">Sair</a></li>
            
        </ul><!--Links-->
      
        <div class="h-main">
            <div class="bx bx-menu" id="menu-icon"></div>
            <div class="bx bx-moon" id="darkmode"></div>
            
        </div><!--h-main-->
    </header> 
    <!--Cabeçalho-->
    <div id="background">
        
        <div class="container">
            <table border="1">
                <tr>
                    <th>NOME:</th>
                    <th>EMAIL:</th>
                    <th>ALTERAR DADOS:</th>
                </tr>
                <?php
                    while($tbl = mysqli_fetch_array($retorno)){
                ?>
                    <tr>
                        <td><?= $tbl[1]?></td> 
                        <td><?= $tbl[2]?></td> 
                        <td><a href="alterausuario.php?id=<?=$tbl[0]?>"><input type="button" value="ALTERAR DADOS"></a></td>
                    </tr>
                    <?php 
                    }
                    ?>
                
            
            </table>
        </div>
    </div>

    <script src="script/script.js"></script>
</body>
</html>