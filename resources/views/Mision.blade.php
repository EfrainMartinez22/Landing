@extends('Plantilla')

@section('mvv')

    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- Breadcrums-->
    <section id="learn" class="p-1">
        <div class="container">
            <div class="row align-items-center">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='lightblue'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Misión</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- Content Section-->
    <section id="learn" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col-md p-5">
                    <h2>Nuestra <span class="text-info"> Misión</span></h2>
                    <br>
                    <p class="lead">
                        Ofrecer un servicio de calidad. 
                        Tener el mejor servicio como sea posible. 
                        Ser un sitio web funcional que resuelva una necesidad real. 
                    </p>
                    <br>
                    <p>
                        Proveer las condiciones apropiadas para que 
                        tanto nuestros usuarios como nuestro personal
                        administrativo puedan recibir un servicio y trato
                        de calidad. Debido a la pandemia actual que estamos 
                        entrentando, buscamos evitar en la medida de lo posible 
                        las aglomeraciones de personas dentro de las instituciones 
                        de salud. 
                    </p>
                    <br>
                    <button class="btn btn-info rounded-pill text-white"  href="#">Más Información</button>
                </div>

                <div class="col-md mt-5">
                    <img src="img/mision.jpg" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>


