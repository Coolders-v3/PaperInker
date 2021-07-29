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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	 @livewireStyles
</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm ">
            <div class="container">
               <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="logo-home-index"
                    src="{{ asset('images/logo-user.png') }}" 
                    alt="logo-user">
                </a> 
            
                
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 body-index">
                    <div class="flex justify-center  sm:pt-0 contenedor-logo-home-index"> 
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img class="logo-home-index"
                            src="{{ asset('images/logo-home.png') }}" 
                            alt="logo-user">
                        </a> 
                    </div>
                </div>     
             
                

                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
					@auth()
                    <ul class="navbar-nav mr-auto">
						<!--Nav Bar Hooks - Do not delete!!-->
						<li class="nav-item">
                            <a href="{{ url('/illustrations') }}" class="nav-link"><i class="fab fa-laravel text-info"></i> Illustrations</a> 
                        </li>
                    </ul>
					@endauth()
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">                
                        <!-- Authentication Links -->
                        
                    </ul>
                </div>
            </div>
        </nav> --}}
    
        {{-- <main class="py-2">
            @yield('content')
        </main>
    </div> --}}

  {{-- </nav> --}}
  <main class="py-2 purplebg">
    @yield('content')
  </main>
</div>

@livewireScripts
<script type="text/javascript">
	window.livewire.on('closeModal', () => {
		$('#exampleModal').modal('hide');
	});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

</body>
</html>
