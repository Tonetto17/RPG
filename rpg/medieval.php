<?php
session_start();
$nomeusuario = $_SESSION['nomeusuario'];
$idusuario = $_SESSION['idusuario'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="icones/Castelologo.png">
  <title>REINOS PERDIDOS</title>
  <link rel="stylesheet" href="css/estiloconteudo.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@600;700;800&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- 
    - preload images
  -->
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->


  <header class="h-main" id="main-header">
    <a href="#" class="logo"><i class='bx bx-dice-6 bx-flashing'></i>REINOS PERDIDOS</a>

    <ul class="Links">
      <li><a href="index.html" class="active">Inicio</a></li>
      <li><a href="usuarioalterausuario.php?idusuario=<?= $idusuario ?>" class="active">Alterar Usuário</a></li>
      <li><a href="conteudo.php" class="active">Voltar</a></li>
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
        <div id="darkmode"></div>
      </div><!--h-main-->

  </header>
  <!--Cabeçalho-->


  <main>
    <article>
      <section class="section hero" id="home" aria-label="home" style="background-image: url('imagem/medievalconteudo.png')">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Medieval</p>

            <h1 class="h1 hero-title">
              Sua jornada <span class="span">Começa </span> aqui
            </h1>

            <p class="hero-text">
              Conheça um pouco sobre o rpg
            </p>

          </div>


        </div>
      </section>

      <section class="section brand" aria-label="brand">
        <div class="container">

          <ul class="has-scrollbar">

            <li class="brand-item">
              <img src="imagem/machado.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="imagem/espada.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="imagem/coroa.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="imagem/dragao.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="imagem/arqueiro.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="imagem/escudo.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

          </ul>

        </div>
      </section>

      </div>


      <section class="section featured-game" id="features" aria-label="featured game">
        <div class="container">

          <h2 class="h2 section-title">
            Escolha seu <span class="span">personagem:</span>
          </h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="featured-game-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="imagem/VenciaCarnavon.png" width="450" height="600" loading="lazy" alt="Personagem" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="./imagem/VenciaCarnavon.png" class="card-title" tabindex="-1">
                      Personagem <span class="span">Vencia Verão</span>
                    </a>
                  </h3>

                  <span class="card-meta">

                
                      <ion-icon name="notifications"></ion-icon>
                  
                   

                    <span class="span">Herói</span>
                  </span>
                  </span>

                </div>

                <div class="card-content-overlay">

                  <div class="card-wrapper">
                    <a href="./imagem/VenciaCarnavon.png" download="MEDIEVAL" class="card-btn">
                      <img src="imagem/baixar.png" width="36" height="61" loading="lazy" alt="" class="card-icon">
                    </a>
                  </div>
                  <h3 class="h3">
                    <a href="./imagem/VenciaCarnavon.png" class="card-title">
                      Baixe seu <span class="span">Personagem</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Herói</span>
                  </span>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="featured-game-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="imagem/heroi2medieval.png" width="450" height="600" loading="lazy" alt="Personagem" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="./imagem/heroi2medieval.png" class="card-title" tabindex="-1">
                      Personagem <span class="span">Blake Travis</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Herói</span>
                  </span>

                </div>

                <div class="card-content-overlay">

                  <div class="card-wrapper">
                    <a href="./imagem/heroi2medieval.png" download="MEDIEVAL" class="card-btn">
                      <img src="imagem/baixar.png" width="36" height="61" loading="lazy" alt="" class="card-icon">
                    </a>
                  </div>

                  <h3 class="h3">
                    <a href="./imagem/heroi2medieval.png" class="card-title">
                      Baixe seu <span class="span">Personagem</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Herói</span>
                  </span>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="featured-game-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="imagem/vilao1medieval.png" width="450" height="600" loading="lazy" alt="Personagem" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="./imagem/vilao1medieval.png" class="card-title" tabindex="-1">
                      Personagem<span class="span">Meara Horrig</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Vilão</span>
                  </span>

                </div>

                <div class="card-content-overlay">

                  <div class="card-wrapper">
                    <a href="./imagem/vilao1medieval.png" download="MEDIEVAL" class="card-btn">
                      <img src="imagem/baixar.png" width="36" height="61" loading="lazy" alt="" class="card-icon">
                    </a>
                  </div>

                  <h3 class="h3">
                    <a href="./imagem/vilao1medieval.png" class="card-title">
                      Baixe seu <span class="span">Personagem</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Vilão</span>
                  </span>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="featured-game-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="imagem/vilao2medieval.png" width="450" height="600" loading="lazy" alt="Personagem" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="./imagem/vilao2medieval.png" class="card-title" tabindex="-1">
                      Personagem <span class="span">Aela Hume</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Vilão</span>
                  </span>

                </div>

                <div class="card-content-overlay">


                  <div class="card-wrapper">
                    <a href="./imagem/vilao2medieval.png" download="MEDIEVAL" class="card-btn">
                      <img src="imagem/baixar.png" width="36" height="61" loading="lazy" alt="" class="card-icon">
                    </a>
                  </div>

                  <h3 class="h3">
                    <a href="./imagem/vilao2medieval.png" class="card-title">
                      Baixe seu <span class="span">Personagem</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Vilão</span>
                  </span>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>



      <section class="section shop" id="shop" aria-label="shop" style="background-image: url('./assets/images/shop-bg.jpg')">
        <div class="container">

          <h2 class="h2 section-title">
            Download <span class="span">necessários:</span>
          </h2>

          <p class="section-text">
            Faça o download para conseguir usar utilizar a ficha online
          </p>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="shop-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 260;">
                  <img src="imagem/livro.jpg" width="300" height="260" loading="lazy" alt="Historia" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="./historias/MEDIEVAL.txt" class="card-badge skewBg">Historia</a>

                  <h3 class="h3">
                    <a href="./historias/MEDIEVAL.txt" class="card-title">Baixe sua historia</a>
                  </h3>

                  <div class="card-wrapper">
                    <a href="./historias/MEDIEVAL.txt" download="medieval" class="card-btn">
                      <ion-icon name="download-outline"></ion-icon>
                    </a>
                  </div>


                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 260;">
                  <img src="imagem/Mapa.jpg" width="300" height="260" loading="lazy" alt="Mapa" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="./mapas/medieval.zip" class="card-badge skewBg">Mapa</a>

                  <h3 class="h3">
                    <a href="./mapas/medieval.zip" class="card-title">Baixe os mapas</a>
                  </h3>

                  <div class="card-wrapper">
                    <a href="./mapas/medieval.zip" download="medieval" class="card-btn">
                      <ion-icon name="download-outline"></ion-icon>
                    </a>
                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 260;">
                  <img src="imagem/Ficha01.jpg" width="300" height="260" loading="lazy" alt="Programa de fichas" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-badge skewBg">Ficha online</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">Ficha online</a>
                  </h3>

                  <div class="card-wrapper">
                    <a href="#" download="medieval" class="card-btn">
                      <ion-icon name="download-outline"></ion-icon>
                    </a>
                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 260;">
                  <img src="imagem/Ficha02.jpg" width="300" height="260" loading="lazy" alt="Ficha fisica" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="./fichas/fichas.zip" class="card-badge skewBg">Ficha fisica</a>

                  <h3 class="h3">
                    <a href="./fichas/fichas.zip" class="card-title">Ficha fisica</a>
                  </h3>

                  <div class="card-wrapper">
                    <a href="./fichas/fichas.zip" download="MEDIEVAL" class="card-btn">
                      <ion-icon name="download-outline"></ion-icon>
                    </a>
                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>


    </article>
  </main>



  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <ul class="contact-list">

            <ul class="footer-list">

              <li>
                <p class="footer-list-title">Giovanna</p>
              </li>

              <li>
                <a href="https://www.linkedin.com/in/giovanna-correia-tonetto-536897255/" class="footer-link" target="_blank">linkedin</a>
              </li>

              <li>
                <a href="https://github.com/Tonetto17" class="footer-link" target="_blank">GitHub</a>
              </li>

              <li>
                <a href="https://instagram.com/__tonetto__?utm_source=qr&igshid=NGExMmI2YTkyZg%3D%3D" class="footer-link" target="_blank">Instagram</a>
              </li>


            </ul>

          </ul>

        </div>

        <div class="footer-brand">

          <ul class="contact-list">

            <ul class="footer-list">

              <li>
                <p class="footer-list-title">Joan</p>
              </li>

              <li>
                <a href="https://www.linkedin.com/in/joan-lenon-barbosa-532058185/" class="footer-link" target="_blank">linkedin</a>
              </li>

              <li>
                <a href="https://github.com/Joanlenon" class="footer-link" target="_blank">GitHub</a>
              </li>

              <li>
                <a href="https://instagram.com/joanlenon" class="footer-link" target="_blank">Instagram</a>
              </li>


            </ul>

          </ul>

        </div>

        <div class="footer-brand">

          <ul class="contact-list">

            <ul class="footer-list">

              <li>
                <p class="footer-list-title">Sarah</p>
              </li>

              <li>
                <a href="https://www.linkedin.com/in/sarah-fontanezi-7b8901288/" class="footer-link" target="_blank">linkedin</a>
              </li>

              <li>
                <a href="https://github.com/sarinha1403" class="footer-link" target="_blank">GitHub</a>
              </li>

              <li>
                <a href="https://instagram.com/bysarinha_perdida?" class="footer-link" target="_blank">Instagram</a>
              </li>


            </ul>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023 Portal RPG.
        </p>


      </div>
    </div>

  </footer>

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up"></ion-icon>
  </a>

  <script src="script/scriptconteudo.js" defer></script>
  <script src="script/script.js" defer></script>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>


</body>

</html>