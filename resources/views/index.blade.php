@extends('layout.template')

@section('title', 'FETI- Iniciação profissional')

@section('content')

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


  </body>
</html
