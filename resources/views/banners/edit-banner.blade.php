@extends('layout.admin-template')

@section('title', 'Dashboard - Adicionar parceiro')

@section('content')

<section class="generic-form-wrapper banners-form">
   <form action="/dashboard/banners/edit/{{$banner->id}}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="dashboard-heading spacing">
        <h1 class="section-title">
          Editar banner
        </h1>
        <a href="/dashboard/parceiros">Ver banners existentes</a>
      </div>

      <div class="input-control">
        <label for="title">Nome</label>
        <input type="text" name="title" id="title" placeholder="assunto" required value="{{$banner->title}}">
      </div>

      <div class="input-control">
        <label for="link">Link</label>
        <input type="text" name="link" id="link" placeholder="https://www.google.com.br" required value="{{$banner->link}}">
      </div>

      <div class="input-control drop-zone">
        <label id="banner-label" for="banner-input-file">Clique ou arraste aqui para enviar o &nbsp;<span>banner</span></label>
        <div class="image-input-preview" style="background-image: url('/images/banners/{{$banner->image}}');"></div>
        <input type="file" name="banner" id="banner-input-file" >
      </div>

      <button type="submit">Concluir edição</button>
    </form>
</section>


@endsection