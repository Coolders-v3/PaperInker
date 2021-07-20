@extends('layouts.app')
{{-- @section('title', __('Welcome')) --}}

@section('content')

<div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h5><span class="text-center fa fa-home"></span> @yield('title')</h5></div>
            <div class="card-body">
              <h5>  
            @guest
                {{ __('Welcome to') }} {{ config('app.name', 'Laravel') }} !!! </br>
                Please contact admin to get your Login Credentials or click "Login" to go to your Dashboard.
            @else
                    Hi {{ Auth::user()->name }}, Welcome back to {{ config('app.name', 'Laravel') }}.
            @endif  
                </h5>
            </div>
        </div>
    </div>
</div>
</div>
<<<<<<< HEAD
@endsection --}}
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0 color-body">
        
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 body-index">

                <div class="flex justify-center  sm:pt-0 contenedor-logo-home-index">  
                                     
                    <img class="logo-home-index" src="{{ asset('images/logo-home.png') }}" alt="">

                </div>

                <div class="mt-8 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                   
                        

=======
@endsection 
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0 color-body">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 body-index">
                <div class="flex justify-center  sm:pt-0 contenedor-logo-home-index">  
                    <img class="logo-home-index" src="{{ asset('images/logo-home.png') }}" alt="">
                </div>
                <div class="mt-8 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
>>>>>>> 738b699af23ab9c749d1be80a10149af6b422602
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
<<<<<<< HEAD

                    
                </div>

                <div class="mt-8 color-body  overflow-hidden  ">

=======
                </div>
                <div class="mt-8 color-body  overflow-hidden  ">
>>>>>>> 738b699af23ab9c749d1be80a10149af6b422602
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
<<<<<<< HEAD
                
            @endif
                   </div>
                    

                </div>

              
            </div>
        </div>
    </body>
</html>
=======
            @endif
                   </div>
                </div>
            </div>
        </div>
    </body>
</html>
>>>>>>> 738b699af23ab9c749d1be80a10149af6b422602
