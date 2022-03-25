@extends('layout.admin-template')

@section('title', 'Dashboard')

@section('content')

<section class="create-news">
   <form action="/noticias/edit/{{$news->id}}" method="POST" enctype="multipart/form-data" id="editForm">
      @csrf

      <div class="dashboard-heading spacing">
        <h1 class="section-title">
          Editar notícia
        </h1>
        <a href="/dashboard/noticias">Editar outra</a>
      </div>

      <div class="input-control">
        <label for="title">Título</label>
        <input 
          type="text" 
          value="{{$news->title}}"
          name="title" 
          id="title" 
          placeholder="Feti abre as inscrições..." 
          required>
      </div>

      
      <div class="input-control">
        <label for="short_desc">Descrição</label>
        <input
          type="text"
          value="{{$news->short_desc}}"
          name="short_desc" 
          id="short_desc" 
          placeholder="Informações a respeito de..." 
          required/> 
      </div>

      <div class="input-control">
        <label  id="content-label">Conteúdo</label>
        <textarea
          value="{{$news->content}}" 
          type="textarea"
          name="content" 
          id="content" 
          placeholder="As inscrições..." 
          required>
          {{$news->content}}
        </textarea> 
      </div>

      <div class="input-control drop-zone">
        <label id="banner-label" for="banner-input-file">Clique ou arraste aqui para enviar o &nbsp;<span>banner</span></label>
        <input type="file" name="banner" id="banner-input-file" required>
      </div>

      <button type="submit">Editar</button>
    </form>
</section>


@endsection