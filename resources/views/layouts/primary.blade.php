<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Above All Home Inspection - @yield('title')</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="/css/primary.css">
        <script type="text/javascript" src="/js/app.js"></script>
    </head>
    <body>

        <!-- Navigation -->
        @include('partials.nav')

        <header>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item active" style="background-image: url('/img/slider-1.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>No Roof Is To Tall</h3>
                            <p>Don't let a damaged roof ruin your next home!</p>
                        </div>
                    </div>
                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('/img/slider-2.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>I'll Find the Cracks</h3>
                            <p>No one wants an unstable foundation.</p>
                        </div>
                    </div>
                    <!-- Slide Three - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('/img/slider-3.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>Thorough and Precise</h3>
                            <p>A thorough and precise inspection every time!</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </header>

        <!-- Page Content -->
        @yield('content')

        @include('partials.footer')

    </body>
</html>
