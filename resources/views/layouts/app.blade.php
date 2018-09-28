<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta name="keyword" content="@yield('meta_keyword')">
    <meta name="description" content="@yield('meta_description')">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mycss.css') }}" rel="stylesheet">



</head>
<body>
<div class="container" >
    <div id="" class="col-12">

        @include('layouts.header')


        <main class="py-4">
            @yield('content')
        </main>


        @include('layouts.footer')

    </div>
</div>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
