@extends('layout.admin-template')

@section('title', 'Dashboard - Notícias')
@section('content')
  <div class="dashboard-option-container">
    <div class="dashboard-heading">
      <a href="/noticias" target="_blank"><h1>Noticias</h1></a>
      <div>
        <a href="/dashboard/noticias/create">Nova notícia<i class="fas fa-plus new-news"></i></a>
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
            <a href="/dashboard/noticias/edit/{{$n->id}}">Editar</a>
            <a href="/dashboard/noticias/destroy/{{$n->id}}">Apagar</a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection