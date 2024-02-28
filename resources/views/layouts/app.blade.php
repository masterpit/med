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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @yield('style')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li><a class="nav-link " href="/" role="button"  aria-expanded="false" v-pre>
                            Главная
                        </a></li>
                        <li><a class="nav-link " href="{{route("about")}}" role="button"  aria-expanded="false" v-pre>
                            О клинике
                        </a></li>
                        <li><a class="nav-link " href="{{route("specialists")}}" role="button"  aria-expanded="false" v-pre>
                            Специалисты
                        </a></li>
                        <li><a class="nav-link " href="{{route("services")}}" role="button"  aria-expanded="false" v-pre>
                            Услуги
                        </a></li>
                        <li><a class="nav-link " href="{{route("for_patient")}}" role="button"  aria-expanded="false" v-pre>
                            Пациентам
                        </a></li>
                        <li><a class="nav-link " href="{{route("appointment")}}" role="button"  aria-expanded="false" v-pre>
                            Запись на прием
                        </a></li>
                        <li><a class="nav-link " href="{{route("contacts")}}" role="button"  aria-expanded="false" v-pre>
                            Контакты
                        </a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Логин') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('выйдти') }}
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
            <div class="mx-3">
                <div class="row row-cols-auto">
                <div class="col-md-9">
                    <div class="content_section ">
                        <div class="content_wrapper">
                            
                            @yield('content')
                        </div>
                        
                    </div>                    
                </div>
                <div class="col-md-3 mt-3">
                    <div id="map" style="width:200px; height:300px">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0b3d74f93fd8ed91f52e44c3089b82661b13000f2c88617c0ca2c376c99551b2&amp;width=250&amp;height=240&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                    <div class="row div_line">
                        <div class="col-1">
                            <img src="{{asset('img/geoicon.svg')}}">
                        </div>
                        <div class="col-11">
                            <p>Казахстан, п. Бесагаш (Талгарский район, Алматинская обл.), ул. ​Момышулы, д. 45А</p>
                        </div>                       
                    </div>
                    <div class="row div_line">
                        <div class="col-1">
                            <img src="{{asset('img/mailicon.svg')}}">
                        </div>
                        <div class="col-11">
                            <a data-v-da27ce88="" style="text-decoration: none;" href="mailto: promedical.too@mail.ru">promedical.too@mail.ru</a>
                        </div>                       
                    </div>
                    <div class="row div_line">
                        <div class="col-1">
                            <img src="{{asset('img/clockicon.png')}}" style="height: 24px;">
                        </div>
                        <div class="col-11">
                            режим работы 8:00 - 20:00
                        </div>                                   
                    </div>
                    <div class="row div_line">
                        <div class="col-1">
                            <img src="{{asset('img/phoneicon.svg')}}" style="height: 24px;">
                        </div>
                        <div class="col-11">
                            +7 771 765 95 35
                        </div>                                   
                    
                        <div class="col-1">
                            <img src="{{asset('img/phoneicon.svg')}}" style="height: 24px;">
                        </div>
                        <div class="col-11">
                            +7 771 765 95 35
                        </div>                                   
                    </div>
                    <div class="row div_line">
                        <div class="col-1">
                            <img src="{{asset('img/instaicon.png')}}" style="height: 24px;">
                        </div>
                        <div class="col-11">
                            <span data-v-4019ae13="">@promedical.kz</span>
                        </div>                                   
                    </div>
                </div>
                </div>
            </div>
            
            
            
        </main>
    </div>
</body>
</html>
