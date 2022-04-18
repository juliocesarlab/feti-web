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
    <link rel="stylesheet" href="{{asset('css/slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/media-queries.css')}}">

    <title>@yield('title')</title>
  </head>
  <body>
    <div class="overlay">
      <aside class="mobile-menu">
        <div class="close-menu-button">
          <i class="fas fa-times-circle"></i>
        </div>
        <div class="mobile-menu-wrapper">

          <div class="links">
            <a href="/sobre-nos" class="link">Sobre Nós</a>
            <a href="/noticias" class="link">Notícias</a>
            <a href="/editais" class="link">Editais</a>
            <a href="https://leismunicipais.com.br/a/mg/u/uberaba/decreto/2018/149/1489/decreto-n-1489-2018-aprova-o-estatuto-da-fundacao-de-ensino-tecnico-intensivo-dr-rene-barsam-feti-de-que-trata-a-lei-complementar-n-490-de-01-de-junho-2015-e-da-outras-providencias"
             target="_blank"  class="link">Legislação</a>
            <a href="/docs/colaboradores-feti-2022.pdf"  class="link" target="_blank">Quadro Colaborativo</a>
            <a href="/docs/quemequem.pdf" target="_blank" class="link">Quem é quem</a>
            <a href="http://www.uberaba.mg.gov.br/portal/conteudo,40337" class="link" target="_blank">Acesso à informação</a>
            <a href="/contato" class="link">Contato</a>
          </div>
        </div>
      </aside>
    </div>
    <nav>
        <section class="pre-nav">
          <div class="pre-nav-wrapper">
            <div class="links bg-element">
              <a href="/sobre-nos" class="link">Sobre Nós</a>
              <a href="/noticias" class="link">Notícias</a>
              <a href="/editais" class="link">Editais</a>
              <a href="https://leismunicipais.com.br/a/mg/u/uberaba/decreto/2018/149/1489/decreto-n-1489-2018-aprova-o-estatuto-da-fundacao-de-ensino-tecnico-intensivo-dr-rene-barsam-feti-de-que-trata-a-lei-complementar-n-490-de-01-de-junho-2015-e-da-outras-providencias" 
                 target="_blank" class="link">Legislação</a>
              <a href="/docs/colaboradores-feti.pdf" class="link">Quadro colaborativo</a>
              <a href="/contato" class="link">Contato</a>
            </div>
          </div>
        </section>

        <section class="main-nav">
          <div class="logo-area">
            <div class="logo-wrapper">
              <a href="/">
                <img src="{{asset('images/logo.png')}}" alt="FETI" width="300px">
              </a>
            </div>
          </div>

          <div class="search-area">
            <div class="search-wrapper">
              <form action="/noticias" method="GET" id="search-news-form">
                @csrf
                <input type="text" placeholder="O que você procura ?" name="search">
                <span class="search-icon">
                  <i class="fas fa-search"></i>
                </span>
              </form>
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
      @yield('content')
    </main>
    </body>
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
              <h2 class="tel-number">0800 940 3160</h2>
              <h3 class="tel-name">Saúde atende</h3>
            </div>
          </div>

          <div class="contact-box">
            <div class="phone-icon-wrapper">
              <i class="fas fa-phone-alt"></i>
            </div>
            <div class="details">
              <h2 class="tel-number">156</h2>
              <h3 class="tel-name">Ouvidoria-geral</h3>
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
            <img src="{{asset('images/logo.png')}}" alt="FETI">
          </div>
        </div>
      </section>
    </footer>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/acessiblity.js')}}"></script>
    <script src="https://kit.fontawesome.com/710ee36645.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{asset('js/swiper.js')}}"></script>
    <script src="{{asset('js/slider.js')}}"></script>
  </script>
    </html>
