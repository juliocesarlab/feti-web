@extends('layout.admin-template')

@section('title', 'Dashboard - Adicionar parceiro')

@section('content')

<section class="generic-form-wrapper partners-form">
   <form action="/dashboard/parceiros/edit/{{$partner->id}}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="dashboard-heading spacing">
        <h1 class="section-title">
          Editar parceiro
        </h1>
        <a href="/dashboard/parceiros">Ver parceiros existentes</a>
      </div>

      <div class="input-control">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" placeholder="Empresa X" required value="{{$partner->name}}">
      </div>


      <div class="input-control drop-zone">
        <label id="banner-label" for="banner-input-file">Clique ou arraste aqui para enviar o &nbsp;<span>banner</span></label>
        <div class="image-input-preview" style="background-image: url('/images/partners/{{$partner->image}}');"></div>
        <input type="file" name="banner" id="banner-input-file" >
      </div>

      <button type="submit">Concluir edição</button>
    </form>
</section>


@endsection