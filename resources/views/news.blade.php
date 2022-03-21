@extends('layout.template')

@section('title', 'Notícias')

@section('content')
<section class="news news-page">
        <div class="section-heading">
          <h1 class="section-title">Notícias</h1>
        </div>

        <div class="section-body">
         @foreach($news as $index => $sNews)

          <a href="/noticias/{{$sNews->id}}" class="news-card-link">
            <div class="news-card">
              <div class="news-image">
                <img src="/images/{{$sNews->image}}" alt="{{$sNews->title}}">
              </div>
              <div class="news-details">
                <span>{{$sNews->created_at->format('d/m/Y')}}</span>
                <h3>{{$sNews->title}}</h3>
                <p>{{substr($sNews->content, 0, 150). '...'}}</p>
              </div>
            </div>
          </a>
          @endforeach
        </div>
</section>
@endsection
