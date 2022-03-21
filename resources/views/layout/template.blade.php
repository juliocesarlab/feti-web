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

    <title>@yield('title')</title>
  </head>

  @yield('content')

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