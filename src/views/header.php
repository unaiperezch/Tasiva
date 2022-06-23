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
    <link rel="stylesheet" href="src\styles\bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Tasiva | Sistemas de visión artificial</title>
    <link rel="shortcut icon" href="src\img\logo_tasiva.jpg" type="image/x-icon">
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <div class="col-lg-6 bg-muted p-lg-2 text-center">
                <img src="src\img\logo_tasiva.jpg" alt="" height="80" class="ml-auto">
            </div>
            <nav class="navbar navbar-dark bg-muted col-lg-6 d-flex justify-content-center">
                <li class="nav-item dropdown" style="list-style-type: none;">
                    <a class="nav-link" href="#" data-toggle="dropdown">Somos</a>
                </li>

                <li class="nav-item dropdown" style="list-style-type: none;">
                    <a class="nav-link" href="#" data-toggle="dropdown">Sectores</a>
                </li>

                <li class="nav-item dropdown" style="list-style-type: none;">
                    <a class="nav-link" href="#" data-toggle="dropdown">Soluciones</a>
                </li>

                <li class="nav-item dropdown" style="list-style-type: none;">
                    <a class="nav-link" href="#" data-toggle="dropdown">Talento</a>
                </li>

                <li class="nav-item" style="list-style-type: none;">
                    <a class="nav-link" href="src\views\contact.php">Contacto</a>
                </li>
            </nav>
            <div class="cajaImgCarrousel col-lg-12 bg-muted">
                <div id="carousel" class="carousel slide col-lg-8 m-auto" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="src\img\logo_tasiva.jpg" alt="First slide">
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
        </div>
    </header>