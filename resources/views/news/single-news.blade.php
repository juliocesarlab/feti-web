@extends('layout.template')

@section('title', 'Notícias - '.$news->title)

@section('content')
  <section class="single-news-page">
    <div class="section-body">
      <div class="banner-container">
        <img src="/images/news/{{$news->image}}" alt="{{$news->title}}">
      </div>
      <div class="content">
        <div class="section-heading">
          <span class="news-date">{{$news->created_at->format('d/m/Y')}}</span>
          <h1 class="section-title">{{$news->title}}</h1> 
          <p class="section-description">{{$news->short_desc}}</p>
        </div>
        <div class="news-content">
          {!! $news->content !!}
        </div>
      </div>
    </div>
  </section>
@endsection
