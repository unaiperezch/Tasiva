<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="src\styles\footer_styles.css">
    <link rel="stylesheet" href="src\styles\contact_styles.css">
    <link rel="stylesheet" href="src\styles\header_styles.css">
    <link rel="stylesheet" href="src\styles\index_styles.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Tasiva | Sistemas de visión artificial</title>
</head>

<body>
    <header class="row">
        <div class="col-lg-6 bg-dark p-lg-2 text-center">
            <img src="src\img\logo_tasiva.jpg" alt="" height="80" class="ml-auto">
        </div>
        <nav class="navbar navbar-dark bg-dark col-lg-6 d-flex justify-content-center">
            <li class="nav-item dropdown" style="list-style-type: none;">
                <a class="nav-link" href="#" data-toggle="dropdown">Soluciones</a>

                <div class="dropdown-menu">
                    <h5 class="dropdown-header">Servicio</h5>
                    <a class="dropdown-item">Servicios</a>
                    <a class="dropdown-item">Procesos</a>
                    <a class="dropdown-item">Solución única</a>

                    <div class="dropdown-divider"></div>
                    <h5 class="dropdown-header">Producto</h5>
                    <a class="dropdown-item">Estandarizacíon</a>
                </div>
            </li>

            <li class="nav-item dropdown" style="list-style-type: none;">
                <a class="nav-link" href="#" data-toggle="dropdown">Somos</a>

                <div class="dropdown-menu">
                    <h5 class="dropdown-header">Equipo</h5>
                    <a class="dropdown-item">Personas</a>
                    <a class="dropdown-item">Javier</a>

                    <div class="dropdown-divider"></div>
                    <h5 class="dropdown-header">Empresa</h5>
                    <a class="dropdown-item">Misíon</a>
                    <a class="dropdown-item">Visión</a>
                    <a class="dropdown-item">Valores</a>
                </div>
            </li>

            <li class="nav-item dropdown" style="list-style-type: none;">
                <a class="nav-link" href="#" data-toggle="dropdown">Sectores</a>

                <div class="dropdown-menu">
                    <a class="dropdown-item">Agroalimentario</a>
                    <a class="dropdown-item">Automóvil</a>
                    <a class="dropdown-item">Alimentación</a>
                    <a class="dropdown-item">Farmacéutico</a>
                    <a class="dropdown-item">Plástico</a>
                    <a class="dropdown-item">Otros</a>
                </div>
            </li>

            <li class="nav-item dropdown" style="list-style-type: none;">
                <a class="nav-link" href="#" data-toggle="dropdown">Talento</a>

                <div class="dropdown-menu">
                    <a class="dropdown-item">Por qué buscamos</a>
                    <a class="dropdown-item">Cómo conocernos</a>
                </div>
            </li>

            <li class="nav-item" style="list-style-type: none;">
                <a class="nav-link" href="src\views\contact.php">Contacto</a>
            </li>
        </nav>
        <div class="cajaImgCarrousel col-lg-12 bg-light">
            <div id="carousel" class="carousel slide col-lg-8 m-auto" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="src\img\00 2022-06-21\Infrarrojos.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="src\img\logo_tasiva.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="src\img\logo_tasiva.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </header>