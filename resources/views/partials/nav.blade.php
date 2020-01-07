<nav id="primary-nav" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/img/Logo_nav.png" height="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if($menu == 'home') active @endif">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item @if($menu == 'services') active @endif">
                    <a class="nav-link" href="/services">Services</a>
                </li>
                <li class="nav-item @if($menu == 'contact') active @endif">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
s
