<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Parallax Effect | Pure CSS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bf93869655.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="container" style="margin: 20%;">
        <div class="first">
            <div class="grid">
                <div class="textos-hero">
                    <h1 class="weigt-600">
                        Si lo imaginas lo puedes crear<span class="weight-400"></span></h1>
                    <p class="parrafo">En CERTIFICUAATE somos una empresa que se preocupa por los futuros desarrolladores ofreciendo certificaciones y cursos de manera gratuita para que juntos desarrollemos el mundo en el que vivimos </p>
                    <a href="" class="cta">Conocenos</a>
                </div>
                <div class="img-hero">
                    <div>
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/C++.png" class="d-block w-100" alt="..." height="300px">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 style="color: black"><a href="">CERTIFICADO DE C++</a></h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="img/JAVA.jpg" class="d-block w-100" alt="..." height="300px">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 style="color: black"><a href="">CERTIFICADO DE JAVA</a></h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="img/HTML.jpg" class="d-block w-100" alt="..." height="300px">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 style="color: black"><a href="">CERTIFICADO DE HTML</a></h5>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="img/CSS.jpg" class="d-block w-100" alt="..." height="300px">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5 style="color: black"><a href="">CERTIFICADO DE CSS</a></h5>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main>
            <section class="services">
                <section class="grid">
                    <div class="items">
                        <div class="item">
                            <i class="fa-solid fa-c"></i>
                            <h3 class="titulo services">Conoce mas sobre C#</h3>
                        </div>
                        <div class="item">
                            <i class="fa-brands fa-java"></i>
                            <h3 class="titulo services">Conoce mas sobre JAVA</h3>
                        </div>
                        <div class="item">
                            <i class="fa-brands fa-html5"></i>
                            <h3 class="titulo services">Conoce mas sobre HTML 5</h3>
                        </div>
                        <div class="item">
                            <i class="fa-brands fa-css3-alt"></i>
                            <h3 class="titulo services">Conoce mas sobre CSS 3</h3>

                        </div>
                    </div>
                </section>
            </section>
            <section class="about-us">
                <div class="grid">
                    <div class="textos-about-us">
                        <h2 class="subtitulo">Tu mejor opcion</h2>
                        <p class="parrafo">Mantenerse actualizado es lo mas importante, hazlo con nosotros, contamos con todo lo que necesitas</p>
                    </div>
                    <div class="numbers">
                        <div class="number">Experiencia</div>
                        <div class="number">Calidad</div>
                        <div class="number">Seguridad</div>
                        <div class="number">Variedad</div>
                    </div>
                </div>
            </section>
            <section class="mission grid">
                <div class="textos-mission">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        ¿Que garantias se ofrecen?
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Al finalizar tu certificacion se te entrgara un reconocimiento por parte de la Universidad Autonoma de Aguascalientes (UAA) que hara valida tu certificacion.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Metodo de Aplicacion:
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    Todas las certificaciones se realizan de manera on line mediante un cuestionario
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        ¿Que se necesita para comenzar?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Para tener acceso a nuestras certificaciones y cursos necesitas formar parte de nuestra comunidad, unicamente necesitas Iniciar sesion.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-mission">
                    <img src="img/undraw_Code_thinking_re_gka2.png" alt="" class="img">
                </div>
            </section>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </div>
    <header>
       <?php
        include ("header.html");
    ?>
        <h1>Parallax Effect</h1>
    </header>
    <?php
        include("Footer.html");
    ?>
</body>

</html>
