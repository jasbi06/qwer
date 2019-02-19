<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/" style="color:#777"><span style="font-size:15pt">&#9820;</span> Hotel Dos Mares</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @if( Auth::check() )
                    <li class="nav-item {{ Request::is('habitaciones') && ! Request::is('habitaciones/create')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/habitaciones')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Habitaciones
                        </a>
                    </li>
                    @endif
                    <li class="nav-item {{  Request::is('habitaciones') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/habitaciones/create')}}">
                            <span>&#10010</span> Nueva habitación
                        </a>
                    </li>
                </ul>

                @if( Auth::check() )
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>
                @endif
            </div>
    </div>
</nav>
