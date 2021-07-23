<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@hasSection('title') @yield('title') | @endif {{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home-index.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	 @livewireStyles
</head>
<body>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0 color-body">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 body-index">
                <div class="flex justify-center  sm:pt-0 contenedor-logo-home-index">  
                    <img class="logo-home-index" src="{{ asset('images/logo-home.png') }}" alt="">
                </div>
                <div class="mt-8 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                        <div id="carouselExampleInterval" class="carousel slide slide-home-index" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="{{ asset('images/slide/ilustrador-1.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="{{ asset('images/slide/escritor-1.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="{{ asset('images/slide/ilustrador-1.jpg') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                </div>
                <div class="mt-8 color-body  overflow-hidden  ">
                   <div class="contenedor-botones-home-index">
                    @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">
                   <button type="button" class="btn botones-home-index">Login</button>
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">
                              <button type="button" class="btn botones-home-index">Register</button></a>
                        @endif
                    @endauth
            @endif
                   </div>
                </div>
            </div>
        </div>
        @livewireScripts
        <script type="text/javascript">
          window.livewire.on('closeModal', () => {
            $('#exampleModal').modal('hide');
          });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
