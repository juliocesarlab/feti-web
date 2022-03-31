@extends('layout.admin-template')

@section('title', 'Dashboard')

@section('content')

<section class="generic-form-wrapper">
   <form action="/dashboard/noticias" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="dashboard-heading spacing">
        <h1 class="section-title">
          Criar notícia
        </h1>
        <a href="/dashboard/noticias">Ver notícias criadas</a>
      </div>

      <div class="input-control">
        <label for="title">Título</label>
        <input type="text" name="title" id="title" placeholder="Feti abre as inscrições..." required>
      </div>

      
      <div class="input-control">
        <label for="short_desct">Descrição</label>
        <input type="text" name="short_desc" id="short_desc" placeholder="Informações a respeito de..." required/> 
      </div>

      <div class="input-control">
        <label  id="content-label">Conteúdo</label>
        <textarea type="textarea" name="content" id="content" placeholder="As inscrições..." required>
        </textarea> 
      </div>

      <div class="input-control drop-zone">
        <label id="banner-label" for="banner-input-file">Clique ou arraste aqui para enviar o &nbsp;<span>banner</span></label>
        <input type="file" name="banner" id="banner-input-file" required>
      </div>

      <button type="submit">Criar</button>
    </form>
</section>


@endsection