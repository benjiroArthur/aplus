<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'A-Plus') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('/assets/resourceImages/logo-pg.png')}}" alt="" height="50px" width="auto">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    @auth
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <!-- mid Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <router-link to="/admin/dashboard" class="nav-link myNav text-aplus">Dashboard</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/admin/info" class="nav-link myNav text-aplus">Manage</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/admin/post" class="nav-link myNav text-aplus">Post</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/admin/project" class="nav-link myNav text-aplus">Projects</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/admin/product" class="nav-link myNav text-aplus">Products</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/admin/transaction" class="nav-link myNav text-aplus">Transactions</router-link>
                        </li>
                    </ul>
                    @endauth

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
            @include('includes.messages')
            @auth
            <router-view>
                {{--Vue elements goes here--}}
            </router-view>
            @else
                @yield('content')
            @endauth
            <vue-progress-bar></vue-progress-bar>
        </main>
    </div>
</body>
</html>
