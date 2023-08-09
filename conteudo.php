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
    <!-- <link rel="stylesheet" href="css/estiloconteudo.css"> -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <title>Conteudos</title>
</head>

<body>
    <header>
        <a href="#" class="logo"><i class='bx bxs-castle bx-flashing' ></i>REINOS PERDIDOS</a>

        <ul class="Links">
            <li><a href="index.html" class="active">Inicio</a></li>
            <li><a href="" class="active">Configurações</a></li>
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

    <!-- letras -->
    <div class="container">
        <p>Escolha sua <span class="typed-text"></span><span class="cursor">&nbsp;</span></p>
    </div>
    <!-- fim -->

    <main>
        <ul class="listagem-conteudo">
            <li class="cartao-conteudo">
                <div class="informacoes">
                    <span>Medieval</span>
                </div>
                <img src="imagem/gifmedieval.gif" alt="" class="gif">
                <ul class="tipos">
                    <li class="tipo rpg">RPG</li>
                    <li class="tipo medieval">Medieval</li>
                </ul>
                <p class="descricao">Neste cenário repleto de maravilhas e desafios, aventure-se por florestas ancestrais, ruínas esquecidas e cidades majestosas em busca de tesouros lendários e poderosas relíquias. Forje alianças com companheiros de jornada, cada um com habilidades únicas, e juntos enfrentem ameaças sombrias que espreitam nos recantos mais obscuros</p>
                <a href="medieval.php"><input class="button" type="button" value="Ver mais"></a>


            </li>
            <li class="cartao-conteudo">
                <div class="informacoes">
                    <span>Faroeste</span>
                </div>
                <img src="imagem/giffaroeste.gif" alt="" class="gif">
                <ul class="tipos">
                    <li class="tipo rpg">RPG</li>
                    <li class="tipo faroeste">Faroeste</li>
                </ul>
                <p class="descricao">Bem-vindo ao mundo implacável do Velho Oeste, onde homens valentes e mulheres destemidas se aventuram nas vastas terras selvagens, em busca de fama, fortuna e justiça. No horizonte, o sol escaldante banha as cidades empoeiradas, onde foras da lei tramam seus planos, e xerifes corajosos estão prontos para manter a ordem.</p>
                <a href="faroeste.php"><input class="button" type="button" value="Ver mais"></a>

            </li>
            <li class="cartao-conteudo">
                <div class="informacoes">
                    <span>Futurista</span>
                </div>
                <img src="imagem/giffuturismo.gif" alt="" class="gif">
                <ul class="tipos">
                    <li class="tipo rpg">RPG</li>
                    <li class="tipo futurista">Futurista</li>
                </ul>
                <p class="descricao">Prepare-se para mergulhar em um mundo onde os limites entre o humano e o artificial se desvaneceram, onde a jornada pela verdade e justiça irá desafiar sua perspectiva sobre o futuro da humanidade. Seja bem-vindo(a), suas escolhas definirão o futuro!</p>
                <a href="futurista.php"><input class="button" type="button" value="Ver mais"></a>

            </li>

        </ul>

        
    </main>
    
    <script src="script/script.js"></script>
</body>

</html>