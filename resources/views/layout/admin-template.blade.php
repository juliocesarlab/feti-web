<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Titillium+Web:wght@700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/media-queries.css')}}">
  <title>@yield('title')</title>
</head>
<body>
  <header class="dashboard-header">
    <nav>
      <a href="/" target="_blank"><img src="{{asset('images/logo-2.png')}}" alt="FETI" width="20"></a>
      <div class="options">
        <a href="/dashboard/noticias">
          Notícias
        </a>
        <a href="/dashboard/banners"">
          Banners
        </a>
        <a href="/dashboard/parceiros">
          Parceiros
        </a>
        <form action="/logout" method="POST">
          <a href="/logout" 
            class="logout-link"
            onclick="event.preventDefault(); this.closest('form').submit();" 
          >
            @csrf
            Sair
          </a>
        </form>
      </div>
    </nav>
  </header>
  <main id="main-container">
    @yield('content')
  </main>
  <script src="https://cdn.tiny.cloud/1/gnipllteyx1nuwkxbw9rjpgeww8jeazcrnvn2foj5es9v2ke/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script src="https://kit.fontawesome.com/710ee36645.js" crossorigin="anonymous"></script>
  <script src="https://cdn.tiny.cloud/1/gnipllteyx1nuwkxbw9rjpgeww8jeazcrnvn2foj5es9v2ke/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script src="{{asset('js/dropFile.js')}}"></script>
  <script>
    tinymce.init({
      selector: '#content',
      toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist ',
      body_class: 'text-editor',
    });
  </script>
  @yield('script')
</body>
</html>