<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <link rel="stylesheet" href="/css/index.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>


    <div class="header">
        <div ><button onclick="location.href='/'" class=" a_b">Главная</button></div>

        <div ><a href='#bio' class="a_b">Биография</a></div>
        <div ><a href='#start' class="a_b">Начало карьеры</a></div>
        <div ><a href='#solo' class="a_b">Сольная деятельность</a></div>
        
        @if (Route::has('login'))
            <div >
                @auth
                    <a class="a_b" href="{{ url('/home') }}">Личный кабинет</a>
                @else
                    <a class="a_b" href="{{ route('login') }}">Вход</a>

                    @if (Route::has('register'))
                        <a class="a_b" href="{{ route('register') }}">Регистрация</a>
                    @endif
                @endauth
            </div>
        @endif
    
    </div>


    <div id="app"><!--
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    
                    <ul class="navbar-nav ml-auto">
                       
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Вход1') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация1') }}</a>
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
                                        {{ __('Выйти') }}
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
-->
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    
    <div class="footer">
            <div >
                Гапонова Анастасия Дмитриевна<br><br>
                Колледж экономики и информатики<br><br>
                Инструментальные средства разработки программного обеспечения
              
          </div>

    </div>



    
</body>
</html>
