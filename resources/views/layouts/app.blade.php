<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }}</title>
    

    <title>Login y Registro</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body::-webkit-scrollbar {
        width: 12px;
        }
        body::-webkit-scrollbar-track {
        border-radius: 10px;
        background-color: rgba(0, 0, 0, 0.4);
        }
        body::-webkit-scrollbar-thumb {
        background-color: #aab74d;
        background-image:-webkit-linear-gradient(rgba(255,255,255,.3) 20%,transparent 20%,transparent 40%,rgba(255, 255, 255, 0.3) 40%,rgba(255,255,255,.3) 60%,transparent 60%,transparent 80%,rgba(255, 255, 255, 0.3) 80%);
        border-radius: 10px;
        }
    </style>
</head>
<body>
    <div id="app" style="font-family: 'Bowlby One SC', cursive;font-size: 18px;background-image: url(4.png);background-repeat: no-repeat;background-position: center">
        <nav class="navbar navbar-expand-md navbar-light bg-success shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Inicio
                </a>

 
                <a class="navbar-brand" href="{{ route('animales.crear') }}"><div>
                    Agregar Animales </div></a>
                <a class="navbar-brand" href="{{ route('animales.index') }}"><div> 
                    Lista de Animales</div></a>



                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item" style="background-image: url(1.1p.png)">
                                    <a onMouseOver="this.style.color='#FF911A'"onMouseOut="this.style.color='#000'" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            
                            @if (Route::has('register'))
                                <li class="nav-item" style="background-image: url(1.1p.png)">
                                <!--    
                                    <a onMouseOver="this.style.color='#0F0'"onMouseOut="this.style.color='#000'" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                -->
                                </li>
                            @endif
                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
