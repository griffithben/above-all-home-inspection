<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Above All Home Inspection - @yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="/css/secondary.css">
        <script type="text/javascript" src="/js/app.js"></script>
    </head>
    <body>

        <!-- Navigation -->
        @include('partials.nav')

        <div class="secondary-spacer"></div>

        <!-- Page Content -->
        @yield('content')

        <!-- Footer -->
        @include('partials.footer')
        
    </body>
</html>