<!DOCTYPE html>
<html>
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Titillium+Web:wght@700;900&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media-queries.css">

    <title>FETI - iniciação profissional</title>
  </head>
  <body>
    <div class="overlay">
      <aside class="mobile-menu">
        <div class="close-menu-button">
          <i class="fas fa-times-circle"></i>
        </div>
        <div class="mobile-menu-wrapper">

          <div class="links">
            <a href="#" class="link">Sobre Nós</a>
            <a href="#" class="link">Notícias</a>
            <a href="#" class="link">Editais</a>
            <a href="#" class="link">Legislação</a>
            <a href="#" class="link">Quadro colaborativo</a>
            <a href="#" class="link">Contato</a>
          </div>
        </div>
      </aside>
    </div>
    <nav>
        <section class="pre-nav">
          <div class="pre-nav-wrapper">
            <div class="links bg-element">
              <a href="#" class="link">Sobre Nós</a>
              <a href="#" class="link">Notícias</a>
              <a href="#" class="link">Editais</a>
              <a href="#" class="link">Legislação</a>
              <a href="#" class="link">Quadro colaborativo</a>
              <a href="#" class="link">Contato</a>
            </div>
          </div>
        </section>

        <section class="main-nav">
          <div class="logo-area">
            <div class="logo-wrapper">
              <img src="images/logo.png" alt="FETI" width="300px">
            </div>
          </div>

          <div class="search-area">
            <div class="search-wrapper">
              <input type="text" placeholder="O que você procura ?">
              <span class="search-icon"><i class="fas fa-search"></i></span>
            </div>
          </div>
        </section>

        <section class="pos-nav">
          <div class="pos-nav-wrapper">
            <div class="hamb-button-wrapper">
              <div class="hamb-button">
                <span class="hamb-line"></span>
                <span class="hamb-line"></span>
                <span class="hamb-line"></span>
              </div>
            </div>

            <div class="acessibility-wrapper">
              <div class="font-size-adjust">
                <span>Acessibilidade</span>
                <span id="smallFontSize">-A</span>
                <span id="regularFontSize">A</span>
                <span id="bigFontSize">+A</span>
              </div>
              <div class="theme-adjust">
                <i class="fas fa-toggle-off"></i>
              </div>
            </div>
          </div>
        </section>
    </nav>

    <main id="main-container">
      <section class="services">
        <div class="section-heading">
          <h1 class="section-title">Serviços</h1>
        </div>

        <div class="section-body">
          <div class="services-container">
            <div class="service-card">
              <a class="service-link">
                <img src="images/service-inp.png" alt="iniciação profissional">
              </a>
            </div>
            <div class="service-card">
              <a class="service-link">
                <img src="images/service-jovem-ap.png" alt="jovem aprendiz">
              </a>
            </div>
            <div class="service-card">
              <a class="service-link">
                <img src="images/service-emp.png" alt="empresas">
              </a>
            </div>
            <div class="service-card">
              <a class="service-link">
                <img src="images/service-pcd.png" alt="pcd">
              </a>
            </div>
            <div class="service-card">
              <a class="service-link">
                <img src="images/service-volun.png" alt="voluntario ou doador">
              </a>
            </div>
            <div class="service-card">
              <a class="service-link">
                <img src="images/service-fale.png" alt="fale conosco">
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="slider-section">
        <div class="slideshow-container">
          <div class="slide">
            <img src="images/banner.jpg" >
          </div>
          <div class="slide">
            <img src="images/caixa.jpg" >
          </div>
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </section>

      <section class="news">
        <div class="section-heading">
          <h1 class="section-title">Notícias</h1>
        </div>

        <div class="section-body">
          <a href="#" class="news-card-link">
            <div class="news-card">
              <div class="news-image">
                <img src="images/not1.jpeg" alt="noticia">
              </div>
              <div class="news-details">
                <span>13/03/2022</span>
                <h3>titulo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, quaerat?</p>
              </div>
            </div>
          </a>

          <a href="#" class="news-card-link">
            <div class="news-card">
            <div class="news-image">
              <img src="images/not2.png" alt="noticia">
            </div>
            <div class="news-details">
              <span>13/03/2022</span>
              <h3>titulo</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, quaerat?</p>
            </div>
          </div>
          </a>
        </div>
      </section>

      <section class="partners">
        <div class="section-heading">
          <h1 class="section-title">Parceiros</h1>
        </div>

        <div class="swiper">
          <div class="swiper-wrapper">
              <div class="swiper-slide">
                  <img src="images/part1.png" alt="parceiro">
                </div>
                <div class="swiper-slide">
                  <img src="images/part2.png" alt="parceiro">
                </div>
                <div class="swiper-slide">
                  <img src="images/part3.png" alt="parceiro">
                </div>
              </div>
        </div>
      </section>


    </main>

    <footer>
      <section class="social-media">
        <div class="social-media-wrapper">
          <a href="https://pt-br.facebook.com/fetiuberaba/">
            <i class="fab fa-facebook"></i>
          </a>
          <a href="https://www.instagram.com/fetiuberaba/"">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://www.youtube.com/channel/UCZhvsXONMCQ0wgvbgnk1spA">
            <i class="fab fa-youtube"></i>
          </a>
        </div>
      </section>

      <section class="contacts">
        <div class="contacts-wrapper">

          <div class="contact-box">
            <div class="phone-icon-wrapper">
              <i class="fas fa-phone-alt"></i>
            </div>
            <div class="details">
              <h2 class="tel-number">0800 940 0101</h2>
              <h3 class="tel-name">Todos por Uberaba</h3>
            </div>
          </div>

          <div class="contact-box">
            <div class="phone-icon-wrapper">
              <i class="fas fa-phone-alt"></i>
            </div>
            <div class="details">
              <h2 class="tel-number">0800 940 0101</h2>
              <h3 class="tel-name">Todos por Uberaba</h3>
            </div>
          </div>

          <div class="contact-box">
            <div class="phone-icon-wrapper">
              <i class="fas fa-phone-alt"></i>
            </div>
            <div class="details">
              <h2 class="tel-number">0800 940 0101</h2>
              <h3 class="tel-name">Todos por Uberaba</h3>
            </div>
          </div>
        </div>
      </section>

      <section class="address">
        <div class="address-section-wrapper">
          <div class="info">
            <i class="fas fa-map-marker-alt"></i>
            <div class="content">
              <h2>Atendimento ao público: 07h às 17h</h2>
              <h3>Rua Major Eustáquio, 790 - São Benedito - CEP: 38022-000</h3>
              <h3>Uberaba/MG - Tel.:3352-3500</h3>
            </div>
          </div>
          <div class="logos">
            <img src="images/logo.png" alt="FETI">
          </div>
        </div>
      </section>
    </footer>
    <script src="js/main.js"></script>
    <script src="js/acessiblity.js"></script>
    <script src="https://kit.fontawesome.com/710ee36645.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/slider.js"></script>
  </body>
</html