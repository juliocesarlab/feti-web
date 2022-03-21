@extends('layout.template')

@section('title', 'Notícias')

@section('content')
<section class="news news-page">
        <div class="section-heading">
          <h1 class="section-title">Notícias</h1>
        </div>

        <div class="section-body">

         @if(count($news) === 0) 
           <p style="min-height: 12vh;">Não há notícias ainda, volte mais tarde.</p>
         @endif

         @foreach($news as $index => $sNews)

          <a href="/noticias/{{$sNews->id}}" class="news-card-link">
            <div class="news-card">
              <div class="news-image">
                <img src="/images/news/{{$sNews->image}}" alt="{{$sNews->title}}">
              </div>
              <div class="news-details">
                <span>{{$sNews->created_at->format('d/m/Y')}}</span>
                <h3>{{$sNews->title}}</h3>
                <p>{{ substr($sNews->content, 0, 75). '...' }}</p>
              </div>
            </div>
          </a>
          @endforeach
        </div>
</section>
@endsection
