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
          <h1 class="section-title">{{$news->title}}</h1> <span class="news-date">{{$news->created_at->format('d/m/Y')}}</span>
        </div>
        <div class="news-content">
          {!! $news->content !!}
        </div>
      </div>
    </div>
  </section>
@endsection
