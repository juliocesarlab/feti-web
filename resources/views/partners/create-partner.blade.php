@extends('layout.admin-template')

@section('title', 'Dashboard - Adicionar parceiro')

@section('content')

<section class="generic-form-wrapper partners-form">
   <form action="/dashboard/parceiros/create" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="dashboard-heading spacing">
        <h1 class="section-title">
          Adicionar parceiro
        </h1>
        <a href="/dashboard/parceiros">Ver parceiros existentes</a>
      </div>

      <div class="input-control">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" placeholder="Empresa X" required>
      </div>


      <div class="input-control drop-zone">
        <label id="banner-label" for="banner-input-file">Clique ou arraste aqui para enviar o &nbsp;<span>banner</span></label>
        <input type="file" name="banner" id="banner-input-file" required>
      </div>

      <button type="submit">Adicionar</button>
    </form>
</section>


@endsection