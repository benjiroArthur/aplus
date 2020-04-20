<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'A-Plus') }}</title>




    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="layout-top-nav">
    <div class="wrapper" id="app">
           @include('includes.nav')
           <slider></slider>
           <div class="content-wrapper bodyColour">
               <div class="content">
                   <div class="container-fluid">
                       @include('includes.messages')

                       <router-view>
                           {{--Vue elements goes here--}}
                       </router-view>
                       <custom-footer></custom-footer>
                       <vue-progress-bar></vue-progress-bar>
                       <customer-form></customer-form>
                   </div>

               </div>



           </div>



    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        function createUser() {

        }
    </script>
@yield('script')
</body>
</html>
