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
<script src="script.js"></script>

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
                        <strong href="/" class="nav-link text-white" >Index</strong>
                    </li>
                    <li class="nav-link active">
                        <strong href="" class="nav-link text-white">Procedimientos</strong>
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
                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
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


 <div>
        <h3 class="text-center">Mapa de<span class="text-info"> Sitio</span></h3>

        <br>
        <br>
        <div class="container" id="sitemap">
            <div class="row">
                <div class="col">
                    <a class="dropdown-item" href="/">
                        <p class="fs-6">Index</p>
                    </a>

                </div>


                <div class="col">
                    <a class="dropdown-item" href="#services">
                        <p class="fs-6">Services</p>
                    </a>
                </div>

                <div class="col">
                    <a class="dropdown-item" href="#hdiw">
                        <p class="fs-6">How Does It Works?</p>
                    </a>

                </div>
                <div class="col">
                    <a class="dropdown-item" href="#faq">
                        <p class="fs-6">FAQ</p>
                    </a>


                </div>
                <div class="col">
                    <a class="dropdown-item" href="#">
                        <p class="fs-7">About Us</p>
                    </a>
                    <a class="dropdown-item" href="/mission">
                        <p class="fs-7 text-secondary">Mision</p>
                    </a>
                    <a class="dropdown-item" href="/vision">
                        <p class="fs-7 text-secondary">Vision</p>
                    </a>
                    <a class="dropdown-item" href="/">
                        <p class="fs-7 text-secondary">Valores</p>
                    </a>

                </div>

            </div>
        </div>
        <br>
        <br>
        <br>
         <!-- Footer -->
 <footer class="bg-info text-white pt-5 pb-4">

<div class="container text-center text-md-left">

    <div class="row text-center text-md-left">

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold ">Acuerdos del Usuario</h5>
            <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Términos y Condiciones</a>
            </p>
            <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Aviso de Privacidad</a>
            </p>


        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold ">Ayuda</h5>
            <p>
                <a href="#" class="text-white" style="text-decoration: none;"> FAQ</a>
            </p>
            <p>
                <a href="#" class="text-white" style="text-decoration: none;"> How Does It Works?</a>
            </p>
            <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Sitemap</a>
            </p>


        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 font-weight-bold">CContáctanos</h5>
            <p>
                <a href="#" class="text-white" style="text-decoration: none;"> Tepic Nayarit, Los
                    Fresnos</a>
            </p>
            <p>
                <a href="#" class="text-white" style="text-decoration: none;"> 311-354-4657</a>
            </p>

        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class="text-uppercase mb-4 ">Síguenos</h5>
            <p>
                <a href="https://www.facebook.com/PuertaDeHierroTepic" class="text-white" style="text-decoration: none;"><i class="fab fa-facebook-f "></i></a>
            </p>
            <p>
                <a href="https://twitter.com/hpuertadehierro" class="text-white" style="text-decoration: none;"><i class="fab fa-twitter"></i></a>
            </p>
            <p>
                <a href="https://www.instagram.com/hospitalespuertadehierro" class="text-white" style="text-decoration: none;"><i class="fab fa-instagram"></i></a>
            </p>
            <p>
                <a href="https://www.youtube.com/channel/UCu3pryVhjYmIhFbjm6tHKTQ" class="text-white" style="text-decoration: none;"><i class="fab fa-youtube"></i>
            </p>
        </div>

    </div>
   @yield('mapa')
    <div class="row align-items-center">
        <p>©Copyright2022 | <strong class="text-white">MediCitas UT</strong> | All rights reserved</p>
    </div>

</div>

</footer>


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
