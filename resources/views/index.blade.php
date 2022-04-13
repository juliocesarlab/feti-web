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

        @if(count($banners) != 0)
        <section class="slider-section" id="banners">
          <div class="slideshow-container">
            @foreach($banners as $banner)
              <a href="{{$banner->link}}" title="{{$banner->title}}" target="_blank">
                <div class="slide">
                  <img src="images/banners/{{$banner->image}}" >
                </div>
              </a>
            @endforeach
            @if(count($banners) > 1)
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
            @endif
        </section>
        @endif

      <section class="news">
        <div class="section-heading">
          <h1 class="section-title">Ultimas Notícias</h1>
        </div>

        <div class="section-body">
        @if(count($news) == 0) 
          <p style="min-height: 12vh; font-size: 1.5rem;">Não há notícias ainda, volte mais tarde.</p>
        @endif

         @foreach($news as $index => $sNews)

          <a href="noticias/{{$sNews->id}}" class="news-card-link">
            <div class="news-card">
              <div class="news-image">
                <img src="images/news/{{$sNews->image}}" alt="noticia">
              </div>
              <div class="news-details">
                <span>{{$sNews->created_at->format('d/m/Y')}}</span>
                <h3>{{$sNews->title}}</h3>
                <p>{{substr($sNews->short_desc, 0, 75). '...'}}</p>
              </div>
            </div>
          </a>
          @endforeach
        </div>
        
      </section>
      @if(count($news) >= 2) 
        <a href="/noticias" class="regular-link">Veja mais notícias</a>
      @endif
      <section class="partners" id="parceiros">
        <div class="section-heading">
          <h1 class="section-title">Parceiros</h1>
        </div>

        @if(count($partners) == 0) 
          <p style="min-height: fit-content; font-size: 1.5rem;">Não há parceiros ainda.</p>
        @endif

        <div class="swiper">
          <div class="swiper-wrapper">
            @foreach($partners as $partner)
            <div class="swiper-slide">
                <img src="images/partners/{{$partner->image}}" alt="{{$partner->name}}" title="{{$partner->name}}">
              </div>
            @endforeach
        </div>
      </section>
@endsection



