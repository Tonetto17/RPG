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
  <title>REINOS PERDIDOS</title>
  <link rel="icon" href="icones/Castelologo.png">
  <link rel="stylesheet" href="css/estiloconteudo.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oxanium:wght@600;700;800&family=Poppins:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

</head>

<body id="top">

  <header>
  <a href="#" class="logo"><i class='bx bxs-castle bx-flashing' ></i>REINOS PERDIDOS</a>

    <ul class="Links">
      <li><a href="index.html" class="active">Inicio</a></li>
      <li><a href="" class="active">Configurações</a></li>
      <li><a href="conteudo.php" class="active">voltar</a></li>
      <li><a href="login.php" class="active">Sair</a></li>
      <?php
      
      if ($nomeusuario != null) {
        ?>
       
        <a href="" class="active">
          <li class="profile">Olá
            <?= strtoupper($nomeusuario) ?>
        </a></li>
        <?php
        
      } else {
        echo "<script>window.alert('USUARIO NÃO AUTENTICADO'); window.location.href='../login.php';</script>";
      }
      
      ?>

    </ul>

    <div class="h-main">
      <div class="bx bx-moon" id="darkmode"></div>
      <div class="bx bx-menu" id="menu-icon"></div>



    </div>
  </header>
 
  <main>
    <article>
      <section class="section hero" id="home" aria-label="home"
        style="background-image: url('imagem/cidadefuturista.jpg')">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Futurismo</p>

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
              <img src="imagem/error.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="imagem/olho-bionico.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="imagem/qrcode.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="imagem/robo.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="imagem/virus.png" width="90" height="90" loading="lazy" alt="brand logo">
            </li>

            <li class="brand-item">
              <img src="imagem/humano.png" width="90" height="90" loading="lazy" alt="brand logo">
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
                  <img src="imagem/HenryZaki.png" width="450" height="600" loading="lazy"
                    alt="Personagem" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      Personagem <span class="span">Henry Zaki</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Herói</span>
                  </span>

                </div>

                <div class="card-content-overlay">

                  <img src="imagem/baixar.png" width="36" height="61" loading="lazy" alt=""
                    class="card-icon">

                  <h3 class="h3">
                    <a href="#" class="card-title">
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
                  <img src="imagem/AelaPierce.png" width="450" height="600" loading="lazy"
                    alt="Personagem" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      Personagem <span class="span">Aela Pierce</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Herói</span>
                  </span>

                </div>

                <div class="card-content-overlay">

                  <img src="imagem/baixar.png" width="36" height="61" loading="lazy" alt=""
                    class="card-icon">

                  <h3 class="h3">
                    <a href="#" class="card-title">
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
                  <img src="imagem/DoranJordan.png" width="450" height="600" loading="lazy"
                    alt="Personagem" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      Personagem<span class="span">Doran Jordan</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Vilão</span>
                  </span>

                </div>

                <div class="card-content-overlay">

                  <img src="imagem/baixar.png" width="36" height="61" loading="lazy" alt=""
                    class="card-icon">

                  <h3 class="h3">
                    <a href="#" class="card-title">
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
                  <img src="imagem/MackHadwell.png" width="450" height="600" loading="lazy"
                    alt="Personagem" class="img-cover">
                </figure>

                <div class="card-content">

                  <h3 class="h3">
                    <a href="#" class="card-title" tabindex="-1">
                      Personagem <span class="span">Mack Hadwell</span>
                    </a>
                  </h3>

                  <span class="card-meta">
                    <ion-icon name="notifications"></ion-icon>

                    <span class="span">Vilão</span>
                  </span>

                </div>

                <div class="card-content-overlay">

                  <img src="imagem/baixar.png" width="36" height="61" loading="lazy" alt=""
                    class="card-icon">

                  <h3 class="h3">
                    <a href="#" class="card-title">
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
                  <img src="imagem/livro.jpg" width="300" height="260" loading="lazy" alt="Historia" class="img-cover">
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
                  <img src="imagem/Mapa.jpg" width="300" height="260" loading="lazy" alt="Mapa"
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
                  <img src="imagem/Ficha01.jpg" width="300" height="260" loading="lazy"
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
                  <img src="imagem/Ficha02.jpg" width="300" height="260" loading="lazy" alt="Ficha fisica"
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