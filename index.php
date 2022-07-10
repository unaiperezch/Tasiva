<?php
include "./src/views/header.php";
?>

<main>
    <article>
        <div class="cajaImgCarrousel bg-muted">
            <div id="carousel" class="carousel slide m-auto" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                    <li data-target="#carousel" data-slide-to="3"></li>
                    <li data-target="#carousel" data-slide-to="4"></li>
                </ol>
                <div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="src\img\00_2022-06-21\tasiva-vision-artificial-navarra-slider-1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="src\img\00_2022-06-21\home_slider_tasiva-vision-artificial.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="src\img\00_2022-06-21\home_slider_tasiva-vision-artificial-02.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="src\img\00_2022-06-21\home_slider_tasiva-vision-artificial-03.jpg" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="src\img\00_2022-06-21\home_slider_tasiva-vision-artificial-04.jpg" alt="Fifth slide">
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

        <h1 id="somos">SOMOS</h1>
        <hr>
        <section class="contenerdorCardsEquipo">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="src\img\logo_tasiva.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Nombre</h5>
                    <p class="card-text">Puesto</p>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img class="card-img-top oficinas" src="src\img\00_2022-06-21\Equipo.jpg" alt="Card image cap" height="225">
                <div class="card-body">
                    <h5 class="card-title">Oficinas</h5>
                    <p class="card-text">Puesto</p>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="src\img\logo_tasiva.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Nombre</h5>
                    <p class="card-text">Puesto</p>
                </div>
            </div>
        </section>

        <h1 id="empresa">EMPRESA</h1>
        <hr>
        <section class="mt-lg-4">
            <div class="row justify-content-around">
                <p class="d-flex align-items-center">
                    <i class="material-icons">&#xe417;</i><span>Misión</span>
                </p>
                <p class="d-flex align-items-center">
                    <i class="material-icons">&#xe417;</i><span>Visión</span>
                </p>
                <p class="d-flex align-items-center">
                    <i class="material-icons">&#xe417;</i><span>Valores</span>
                </p>
            </div>

        </section>


        <h1 id="sectores">SECTORES</h1>
        <hr>
        <section>
            <h2 class="d-none">SECTORES</h2>
            <div class="d-flex justify-content-around mt-5 mb-5">
                <div class="text-center transformScale">
                    <img src="src\img\logo_tasiva.jpg" alt="" class="rounded-circle border-dark border" width="100px" height="100px">
                    <h3 class="mt-lg-5">Agroalimentario</h3>
                </div>
                <div class="text-center transformScale">
                    <img src="src\img\logo_tasiva.jpg" alt="" class="rounded-circle border-dark border" width="100px" height="100px">
                    <h3 class="mt-lg-5">Automóvil</h3>
                </div>
                <div class="text-center transformScale">
                    <img src="src\img\logo_tasiva.jpg" alt="" class="rounded-circle border-dark border" width="100px" height="100px">
                    <h3 class="mt-lg-5">Alimentación</h3>
                </div>
                <div class="text-center transformScale">
                    <img src="src\img\logo_tasiva.jpg" alt="" class="rounded-circle border-dark border" width="100px" height="100px">
                    <h3 class="mt-lg-5">Farmacéutico</h3>
                </div>
                <div class="text-center transformScale">
                    <img src="src\img\logo_tasiva.jpg" alt="" class="rounded-circle border-dark border" width="100px" height="100px">
                    <h3 class="mt-lg-5">Plástico</h3>
                </div>
                <div class="text-center transformScale">
                    <img src="src\img\logo_tasiva.jpg" alt="" class="rounded-circle border-dark border" width="100px" height="100px">
                    <h3 class="mt-lg-5">Otros</h3>
                </div>
            </div>
        </section>
        
        <h1 id="soluciones">SOLUCIONES</h1>
        <hr>
        <section>
            <h2 class="d-none">Servicios</h2>
            <div class="d-flex justify-content-around mt-5 mb-5">
                <a href="src\views\soluciones.php">
                    <div class="text-center transformScale" >
                        <img src="src\img\logo_tasiva.jpg" alt="" class="rounded-circle border-dark border" width="100px" height="100px">
                        <h3 class="mt-lg-5">Producto</h3>
                    </div>
                </a>
                <a href="src\views\soluciones.php">
                    <div class="text-center transformScale" href="src\views\soluciones.php">
                        <img src="src\img\logo_tasiva.jpg" alt="" class="rounded-circle border-dark border" width="100px" height="100px">
                        <h3 class="mt-lg-5">A medida</h3>
                    </div>
                </a>
                <a href="src\views\soluciones.php">
                    <div class="text-center transformScale" href="src\views\soluciones.php">
                        <img src="src\img\logo_tasiva.jpg" alt="" class="rounded-circle border-dark border" width="100px" height="100px">
                        <h3 class="mt-lg-5">I+D</h3>
                    </div>
                </a>
            </div>
        </section>

        <section id="talento">
            <h2 class="d-none" >Talento</h2>
            <div id="carousel2" class="carousel slide col-lg-8 m-auto backgroundCarrouselSectors col-lg-12 pb-lg-5 pt-lg-5 mb-lg-5 mt-lg-5" data-ride="carousel2">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active text-light text-center">
                        <h5>¿Por qué buscamos talento?<h5>
                                <p class="col-lg-6 d-block m-auto">Nos encontramos en un momento cambiante donde el cambio tecnológico es una obligación. Nuestro sector es disruptivo y veloz y para adaptarnos todos los días necesitamos personas creativas, con capacidad de trabajo en equipo, con ganas de aprender y afrontar los retos a los que nos enfrentamos.</p>
                                <p>Pincha aqui para más información</p>
                    </div>
                    <div class="carousel-item text-light text-center">
                        <h5>¿Quieres conocernos?<h5>
                                <p class="col-lg-6 d-block m-auto">No vamos a andarnos con rodeos. Queremos gente con talento y dispuesta a superar retos todos los días. Por ello si quieres enviarnos tu Curriculum vamos a ponerte en situación y presentarte este reto, el cuál tienes que superar. <br /> Una vez tengas la respuesta se te abrirá el acceso.</p>
                                <p>Quiero superar el RETO</p>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
    </article>
</main>

<?php
include "./src/views/footer.php";
?>