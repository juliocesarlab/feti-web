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

      <div class="partners-dashboard-list">
        @if(count($partners) == 0)
        <p class="advice">Não há parceiros,<span onclick="document.querySelector('.new-partner').click();" 
           style="font-weight: bold;">&nbsp;cadastre um agora</span></p>
        @endif

        @foreach($partners as $partner)
        <div class="partners-dashboard-list-row">
          <h1>Nome do parceiro: {{$partner->name}}</h1>
          <img src="/images/partners/{{$partner->image}}" alt="{{$partner->name}}" title="{{$partner->name}}">
        </div>
        @endforeach
      </div>
  </section>

@endsection
