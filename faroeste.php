<?php
session_start();
$nomeusuario = $_SESSION['nomeusuario'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gamics - Create Manage Matches</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->

  <link rel="stylesheet" href="css/estiloconteudo.css">

  <!-- 
    - google font link
  -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oxanium:wght@600;700;800&family=Poppins:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header>
  <a href="#" class="logo"><i class='bx bxs-castle bx-flashing' ></i>REINOS PERDIDOS</a>

    <ul class="Links">
      <li><a href="index.html" class="active">Inicio</a></li>
      <li><a href="" class="active">Configurações</a></li>
      <li><a href="conteudo.php" class="active">voltar</a></li>
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
      <div class="bx bx-moon" id="darkmode"></div>
      <div class="bx bx-menu" id="menu-icon"></div>



    </div><!--h-main-->
  </header>
  <!--Cabeçalho-->


  <main>
    <article>
      <section class="section hero" id="home" aria-label="home"
        style="background-image: url('imagem/cidadefaroeste.jpg')">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Faroeste</p>

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
              <img src="./assets/images/brand-3.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-4.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-5.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="./assets/images/brand-6.png" width="90" height="90" loading="lazy" alt="brand logo">
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
                  <img src="./assets/images/featured-game-1.jpg" width="450" height="600" loading="lazy"
                    alt="Personagem" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      Personagem <span class="span">Personagem</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Personagem</span>
                  </span>

                </div>

                <div class="card-content-overlay">

                  <img src="./assets/images/featured-game-icon.png" width="36" height="61" loading="lazy" alt=""
                    class="card-icon">

                  <h3 class="h3">
                    <a href="#" class="card-title">
                      Personagem <span class="span">Personagem</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Personagem</span>
                  </span>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="featured-game-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="./assets/images/featured-game-2.jpg" width="450" height="600" loading="lazy"
                    alt="Personagem" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      Personagem <span class="span">Personagem</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Personagem</span>
                  </span>

                </div>

                <div class="card-content-overlay">

                  <img src="./assets/images/featured-game-icon.png" width="36" height="61" loading="lazy" alt=""
                    class="card-icon">

                  <h3 class="h3">
                    <a href="#" class="card-title">
                      Personagem <span class="span">Personagem</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Personagem</span>
                  </span>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="featured-game-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="./assets/images/featured-game-3.jpg" width="450" height="600" loading="lazy"
                    alt="Personagem" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      Personagem<span class="span">Personagem</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Personagem</span>
                  </span>

                </div>

                <div class="card-content-overlay">

                  <img src="./assets/images/featured-game-icon.png" width="36" height="61" loading="lazy" alt=""
                    class="card-icon">

                  <h3 class="h3">
                    <a href="#" class="card-title">
                      Personagem <span class="span">Personagem</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Personagem</span>
                  </span>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="featured-game-card">

                <figure class="card-banner img-holder" style="--width: 450; --height: 600;">
                  <img src="./assets/images/featured-game-4.jpg" width="450" height="600" loading="lazy"
                    alt="Personagem" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      Personagem <span class="span">Personagem</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Personagem</span>
                  </span>

                </div>

                <div class="card-content-overlay">

                  <img src="./assets/images/featured-game-icon.png" width="36" height="61" loading="lazy" alt=""
                    class="card-icon">

                  <h3 class="h3">
                    <a href="#" class="card-title">
                      Personagem <span class="span">Personagem</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Personagem</span>
                  </span>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>



      <section class="section shop" id="shop" aria-label="shop"
        style="background-image: url('./assets/images/shop-bg.jpg')">
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
                  <img src="#" width="300" height="260" loading="lazy" alt="Historia" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-badge skewBg">Historia</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">Baixe sua historia</a>
                  </h3>

                  <div class="card-wrapper">
                    <button class="card-btn">
                      <ion-icon name="download-outline"></ion-icon>
                    </button>
                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 260;">
                  <img src="./assets/images/shop-img-2.jpg" width="300" height="260" loading="lazy" alt="Mapa"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-badge skewBg">Mapa</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">Baixe os mapas</a>
                  </h3>

                  <div class="card-wrapper">


                    <button class="card-btn">
                      <ion-icon name="download-outline"></ion-icon>
                    </button>
                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 260;">
                  <img src="./assets/images/shop-img-3.jpg" width="300" height="260" loading="lazy"
                    alt="Programa de fichas" class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-badge skewBg">Ficha online</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">Ficha online</a>
                  </h3>

                  <div class="card-wrapper">


                    <button class="card-btn">
                      <ion-icon name="download-outline"></ion-icon>
                    </button>
                  </div>

                </div>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="shop-card">

                <figure class="card-banner img-holder" style="--width: 300; --height: 260;">
                  <img src="./assets/images/shop-img-4.jpg" width="300" height="260" loading="lazy" alt="Ficha fisica"
                    class="img-cover">
                </figure>

                <div class="card-content">

                  <a href="#" class="card-badge skewBg">Ficha fisica</a>

                  <h3 class="h3">
                    <a href="#" class="card-title">Ficha fisica</a>
                  </h3>

                  <div class="card-wrapper">


                    <button class="card-btn">
                      <ion-icon name="download-outline"></ion-icon>
                    </button>
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
                <a href="#" class="footer-link">linkedin</a>
              </li>

              <li>
                <a href="#" class="footer-link">GitHub</a>
              </li>

              <li>
                <a href="#" class="footer-link">Instagram</a>
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
                <a href="#" class="footer-link">linkedin</a>
              </li>

              <li>
                <a href="#" class="footer-link">GitHub</a>
              </li>

              <li>
                <a href="#" class="footer-link">Instagram</a>
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
                <a href="#" class="footer-link">linkedin</a>
              </li>

              <li>
                <a href="#" class="footer-link">GitHub</a>
              </li>

              <li>
                <a href="#" class="footer-link">Instagram</a>
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