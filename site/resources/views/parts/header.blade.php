<!-- Navbar -->
<nav class="navbar navbar-default navbar-fixed-top ">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Consultorios Online</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            
            <ul class="nav navbar-nav navbar-right">
                @include('parts.navbar-search')
                
                @if (Auth::guest())
                <li><a href="{{ url('/login') }}"><i class="fa fa-user"></i> Ingresa</a></li>
                @else
                <li><a href="{{ url('/help') }}"><span class="fa fa-question-circle"></span> Ayuda</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="fa fa-user-md"></span> {{ Auth::user()->name }}<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/profile') }}"><span class="fa fa-sliders"></span> Perfil</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ url('/logout') }}"><span class="fa fa-sign-out"></span> Cerrar Sesión</a></li>
                    </ul>
                </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="spacer-lg"></div>