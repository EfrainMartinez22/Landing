<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="icon" href="img/icono.png">
    <title>MediCitas UT</title>
</head>

<body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg bg-info navbar-dark py-3 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="img/log.png" alt="" width="204" height="41" class="d-inline-block align-text-top">
            </a>
            <a id="navbarDropdown"  href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               
             </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-link active">
                        <a href="/" class="dropdown-item" ><strong href="/" class="nav-link text-white" >Index</strong></a>
                    </li>
                    <li class="nav-link active">
                        <a href="/Procedimientos" class="dropdown-item" ><strong class="nav-link text-white">Procedimientos</strong></a>
                    </li>
                    <li class="nav-link active">
                        <a href="/citas" class="dropdown-item" ><strong href="/citas" class="nav-link text-white">Citas</strong></a>
                    </li>
                    <li class="nav-link active dropdown">
                        <strong class="nav-link dropdown-toggle text-white" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Nosotros
                        </strong>
                        <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="/mision">Misión</a></li>
                            <li><a class="dropdown-item" href="/vision">Visión</a></li>
                            <li><a class="dropdown-item" href="/valores">Valores</a></li>
                            <li><a class="dropdown-item" href="/encuentra">Encuentranos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#sitemap">Mapa de Sitio</a></li>
                        </ul>
                           
                    </li>
                </ul>
                @guest
                    
                    @if (Route::has('login'))
                        <li class="nav-link active">
                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-link active">
                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                        </li>
                    @endif
                @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                @endguest
            </div>
        </div>
    </nav>
    <br>
    <br>


@yield('index')
@yield('mvv')
@yield('login')
@yield('citas')




<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
<script src="js/validacion.js"></script>
    <script src="/js/validacion.js"></script>
</script>
</body>

</html>
