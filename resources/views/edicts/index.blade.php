@extends('layout.template')

@section('title', 'Editais')

@section('content')
  <section class="edicts">
    <div class="section-heading">
     <h1 class="section-title">Editais</h1>  
    </div>
    
    <div class="section-body">
      <ul>
          @foreach($edicts as $edict)
            <li>
              <a href="/docs/edicts/{{$edict->getFilename()}}" target="blank">
                {{
                  str_replace(['_', '.pdf'], ' ', ucfirst(strtolower($edict->getFilename())))
                }}
              </a>
            </li>
          @endforeach
        </ul> 
    </div>
  </section>
@endsection