@extends('layout.admin-template')

@section('title', 'Dashboard - Notícias')
@section('content')
  <div class="news-dashboard">
    <div class="dashboard-heading">
      <h1>Noticias</h1>
      <a href="/noticias/create">Nova notícia<i class="fas fa-plus"></i></a>
    </div>

    <div class="dashboard-body">
      <div class="news-container">
        @foreach($news as $n)
        <div class="news-row">
          <div class="news-row-heading">
            <h3>{{$n->title}}</h3>
            <p>{{$n->short_desc}}</p>
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