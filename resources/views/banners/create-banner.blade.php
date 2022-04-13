@extends('layout.admin-template')

@section('title', 'Dashboard - Adicionar parceiro')

@section('content')

<section class="generic-form-wrapper partners-form">
   <form action="/dashboard/banners/create" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="dashboard-heading spacing">
        <h1 class="section-title">
          Adicionar Banner
        </h1>
        <a href="/dashboard/parceiros">Ver parceiros existentes</a>
      </div>

      <div class="input-control">
        <label for="title">Título</label>
        <input type="title" name="title" id="title" placeholder="Empresa X" required>
      </div>

      <div class="input-control">
        <label for="link">Link (Opcional)</label>
        <input type="title" name="link" id="link" placeholder="https://www.google.com.br">
      </div>


      <div class="input-control drop-zone">
        <label id="banner-label" for="banner-input-file">Clique ou arraste aqui para enviar o &nbsp;<span>banner</span></label>
        <input type="file" name="banner" id="banner-input-file" required>
      </div>

      <button type="submit">Adicionar</button>
    </form>
</section>


@endsection