@extends('layout.admin-template')

@section('title', 'Dashboard - Notícias')
@section('content')
  <div class="news-dashboard">
    <div class="dashboard-heading">
      <h1>Noticias</h1>
      <div>
        <a href="/noticias/create">Nova notícia<i class="fas fa-plus new-news"></i></a>
      </div>
    </div>

    <div class="dashboard-body">
      <div class="news-container">
        @if(count($news) === 0)
          <p 
            class="advice">Não há notícias, 
            <span onclick="document.querySelector('.new-news').click();" 
            style="font-weight: bold;">&nbsp;crie uma agora</span></p>
        @endif

        @foreach($news as $n)
        <div class="news-row">
          <div class="news-row-heading">
            <a href="/noticias/{{$n->id}}" target="_blank">  
              <h3 title="{{$n->title}}">{{$n->title}}</h3>
              <p title="{{$n->short_desc}}">{{ substr($n->short_desc, 0, 45). '...' }}</p>
            </a>
          </div>
          <div class="news-row-options">
            <a href="/noticias/edit/{{$n->id}}">Editar</a>
            <a href="/noticias/destroy/{{$n->id}}">Apagar</a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection