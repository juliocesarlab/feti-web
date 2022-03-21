@extends('layout.template')

@section('title', 'Criar notícia')

@section('content')
  <section class="create-news">
   
    <form action="/noticias" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="section-heading">
      <h1 class="section-title">
        Criar notícia
      </h1>
      </div>

      <div class="input-control">
        <label for="title">Título</label>
        <input type="text" name="title" id="title">
      </div>

      <div class="input-control">
        <label for="content">Conteúdo</label>
        <textarea type="textarea" name="content" id="content">
        </textarea> 
      </div>

      <div class="input-control">
        <label for="banner">Banner</label>
        <input type="file" name="banner">
      </div>

      <button type="submit">Criar</button>
    </form>
  </section>

@endsection