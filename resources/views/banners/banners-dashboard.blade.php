@extends('layout.admin-template')

@section('title', 'Dashboard - Parceiros')

@section('content')

  <section class="dashboard-option-container">
    <div class="dashboard-heading">
        <a href="/#banners" target="_blank"><h1>Banners</h1></a>
        <div>
          <a href="/dashboard/banners/create">Novo banner<i class="fas fa-plus new-banner"></i></a>
        </div>
      </div>

      <div class="generic-dashboard-list">
        @if(count($banners) == 0)
        <p class="advice">Não há banners,<span onclick="document.querySelector('.new-banner').click();" 
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

        @foreach($banners as $banner)
        <div class="generic-dashboard-list-row">
          <div class="info">
            <h1>{{$banner->title}}</h1>
            <img src="/images/banners/{{$banner->image}}" alt="{{$banner->title}}" title="{{$banner->title}}" style="max-width: 200px">
          </div>
          <div class="row-options">
            <a href="/dashboard/banners/edit/{{$banner->id}}">Editar</a>
            <a href="/dashboard/banners/destroy/{{$banner->id}}">Apagar</a>
          </div>
        </div>
        @endforeach
      </div>
  </section>

@endsection
