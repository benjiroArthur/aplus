<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>




    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
    <div class="wrapper" id="app">
        @include('includes.nav')
{{--        @include('includes.slider')--}}
            <slider></slider>
        <div class="content-wrapper bodyColour">
            <div class="content" v-cloak>
                <div class="container-fluid">
                    @include('includes.messages')

                    <router-view>
                        {{--Vue elements goes here--}}
                    </router-view>
                    <vue-progress-bar></vue-progress-bar>
                </div>

            </div>


        <div class="animated slower myLoadDiv1" :class="true ? 'zoomOut':''" v-if="pageLoader">
            <div class="myLoadDiv2 row">
                <div class="justify-content-center myLoadDiv3 col-sm-12 ">
                    <img src="{{asset('assets/images/trip.gif')}}" alt="A-PLUS" height="auto" width="auto" class="animated fadeInDown img-fluid">
                </div>

            </div>
        </div>
        </div>

    </div>
    <!-- Scripts -->
    <script src="{{ asset('jquery.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
    </script>
@yield('script')
</body>
</html>
