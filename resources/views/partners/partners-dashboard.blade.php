@extends('layout.admin-template')

@section('title', 'Dashboard - Parceiros')

@section('content')

  <section class="dashboard-option-container">
    <div class="dashboard-heading">
        <a href="/#parceiros" target="_blank"><h1>Parceiros</h1></a>
        <div>
          <a href="/dashboard/parceiros/create">Novo parceiro<i class="fas fa-plus new-partner"></i></a>
        </div>
      </div>

      <div class="generic-dashboard-list">
        @if(count($partners) == 0)
        <p class="advice">Não há parceiros,<span onclick="document.querySelector('.new-partner').click();" 
           style="font-weight: bold;">&nbsp;cadastre um agora</span>
        </p>
        @else
        <div class="generic-dashboard-list-row heading">
          <div class="info">
            <h1>Nome</h1>
            <h1 style="width: 150px;">Logo</h1>
          </div>
          <div class="options">
            <h1>Opções</h1>
          </div>
        </div>
        @endif

        @foreach($partners as $partner)
        <div class="generic-dashboard-list-row">
          <div class="info">
            <h1>{{$partner->name}}</h1>
            <img src="/images/partners/{{$partner->image}}" alt="{{$partner->name}}" title="{{$partner->name}}" style="max-width: 150px">
          </div>
          <div class="options">
            <a href="/dashboard/parceiros/edit/{{$partner->id}}">Editar</a>
            <a href="/dashboard/parceiros/destroy/{{$partner->id}}">Apagar</a>
          </div>
        </div>
        @endforeach
      </div>
  </section>

@endsection
