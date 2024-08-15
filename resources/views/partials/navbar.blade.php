<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 bg-dark px-3">
    <div class="container-fluid">
        <a class="navbar-brand px-3" href="{{ route('inicio') }}">Examen</a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ setActivo('inicio') }}" href="{{ route('inicio') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActivo('servicios.index') }}" href="{{route('servicios.index')}}">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActivo('proyectos.index') }}" href="{{route('proyectos.index')}}">Proyectos</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link {{ setActivo('clientes.index') }}" href="{{route('clientes.index')}}">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ setActivo('blogs.index') }}" href="{{route('blogs.index')}}">Blog</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link {{ setActivo('contacto.index') }}" href="{{route('contacto.index')}}">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
