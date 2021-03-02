<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Personal</title>

    <!--<link href="/resources/css/cover.css" rel="stylesheet">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta name="theme-color" content="#7952b3">
    <link rel="stylesheet" href="{{ asset('css/cover.css') }}" />
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .card-text,
        .card-title {
            color: black;
        }
    </style>
</head>

<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0">
                    <img src="{{ asset('img/programador.PNG') }}" alt="icono programador" width="50" height="50" class="d-inline-block align-top">
                </h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    <a class="nav-link" href="#">Proyectos</a>
                    <!--<a class="nav-link" href="#">Contacto</a>-->
                </nav>
            </div>
        </header>

        <main>
            <section class="nes-container is-dark with-title is-centered">
                <!--<p class="title is-primary"  style="color:#209CEE;">Seleccionar demostración</p>-->
                <p class="title is-primary">Elige tu demostración</p>
                <p>Saludos a continuación se encuentra una lista de distintas herramientas que he usado en distintos proyectos con ejemplos prácticos.</p>
                <div class="btn-group">
                    <button type="button" class="nes-btn is-success" data-bs-toggle="modal" data-bs-target="#modalMovil">Proyectos Movil</button>
                    <button type="button" class="nes-btn is-primary" data-bs-toggle="modal" data-bs-target="#modalWeb">Gestión/Colaboraciones</button>
                </div>
            </section>
        </main>

        <footer class="mt-auto text-white-50">
            <p>Desarrollado por Lucas Jara.</p>
            <!--<div>Iconos diseñados por <a href="" title="monkik">monkik</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a></div>-->
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/nes.css@2.2.0/css/nes.min.css" rel="stylesheet" />
    <!-- Inicio Modal Web -->
    <div class="modal" tabindex="-1" id="modalWeb">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title">Seleccione para Visitar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class=row>
                        <div class="col-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="{{ asset('img/CapturaInfest.PNG') }}" data-holder-rendered="true">
                                <div class="card-body">
                                    <p class="card-text">Infest es un evento que busca darle a sus asistentes una experiencia única y enriquecedora en la ciudad de Temuco, todo esto a manos de los videojuegos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="{{ asset('img/CapturaRocketLab.PNG') }}" data-holder-rendered="true">
                                <div class="card-body">
                                    <p class="card-text">Somos The RocketLab, productora de contenido offline y online con una basta experiencia desarrollando distintos tipos de actividades a lo largo del país.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="{{ asset('img/CapturaSmartride.PNG') }}" data-holder-rendered="true">
                                <div class="card-body">
                                    <p class="card-text">Somos una empresa joven , dinámica y que da solución a la venta de Scooter y a la reparación de estos , pero antes que todo, somos Riders, amamos la velocidad.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Modal Web -->
    <!-- Inicio Modal Movil -->
    <div class="modal" tabindex="-1" id="modalMovil">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title">Seleccione para Visitar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class=row>
                        <div class="col-6">
                            <div class="card mb-4 box-shadow">
                                <h5 class="card-title">PokePixelArt</h5>
                                <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="{{ asset('img/CapturaInfest.PNG') }}" data-holder-rendered="true">
                                <div class="card-body">
                                    <p class="card-text">Infest es un evento que busca darle a sus asistentes una experiencia única y enriquecedora en la ciudad de Temuco, todo esto a manos de los videojuegos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="{{ asset('img/CapturaSmartride.PNG') }}" data-holder-rendered="true">
                                <div class="card-body">
                                    <p class="card-text">Somos una empresa joven , dinámica y que da solución a la venta de Scooter y a la reparación de estos , pero antes que todo, somos Riders, amamos la velocidad.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Modal Movil -->
</body>

</html>