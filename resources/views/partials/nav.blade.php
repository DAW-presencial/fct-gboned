<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item {{ request()->routeIs('portfolio') ? 'active' : '' }}">
                <a class="nav-link" href="/portfolio">Portfolio</a>
            </li>
            <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item {{ request()->routeIs('form') ? 'active' : '' }}">
                <a class="nav-link" href="/form">Formularios</a>
            </li>
    </div>
</nav>