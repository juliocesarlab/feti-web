@extends('layout.template')

@section('title', 'FETI- Iniciação profissional')

@section('content')
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
         @foreach($news as $index => $sNews)

         @if($index == 2)
            @break
         @endif

          <a href="#" class="news-card-link">
            <div class="news-card">
              <div class="news-image">
                <img src="images/{{$sNews->image}}" alt="noticia">
              </div>
              <div class="news-details">
                <span>{{$sNews->created_at->format('d/m/Y')}}</span>
                <h3>{{$sNews->title}}</h3>
                <p>{{substr($sNews->content, 0, 75). '...'}}</p>
              </div>
            </div>
          </a>
          @endforeach
         <a href="/noticias" class="regular-link">Veja mais notícias</a>
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
@endsection



