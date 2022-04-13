@extends('layout.template')

@section('title', 'Editais')

@section('content')
  <section class="edicts">
    <div class="section-heading">
     <h1 class="section-title">Legislação</h1>  
    </div>
    
    <div class="section-body">
      <ul>
          @foreach($legislations as $legislation)
            <li>
              <a href="/docs/legislation/{{$legislation->getFilename()}}" target="blank">
                {{$legislation->getFilename()}}
              </a>
            </li>
          @endforeach
        </ul> 
    </div>
  </section>
@endsection