<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bf93869655.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php
        include ("header.html");
    ?>
    <div class="first">
        <div class="grid">
            <div class="textos-hero">
                <h1 class="weigt-600">
                    Convertimos tus sueños <span class="weight-400"> en realidad</span></h1>
                <p class="parrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus voluptatem, voluptas similique repudiandae atque nesciunt explicabo consequatur labore, voluptatum recusandae ipsum necessitatibus odio sequi a officiis quis unde, et expedita.</p>
                <a href="" class="cta">Contactanos</a>
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
                        <h3 class="titulo services">lorem</h3>
                        <p>lorem ipsgjhgjhgjhggjhgjhghjghjgjum</p>
                    </div>
                    <div class="item">
                        <i class="fa-brands fa-java"></i>
                        <h3 class="titulo services">lorem</h3>
                        <p>lorem ipsum</p>
                    </div>
                    <div class="item">
                        <i class="fa-brands fa-html5"></i>
                        <h3 class="titulo services">lorem</h3>
                        <p>lorem ipsum</p>
                    </div>
                    <div class="item">
                        <i class="fa-brands fa-css3-alt"></i>
                        <h3 class="titulo services">lorem</h3>
                        <p>lorem ipsum</p>
                    </div>
                </div>
            </section>
        </section>
        <section class="about-us">
            <div class="grid">
                <div class="textos-about-us">
                    <h2 class="subtitulo">about us</h2>
                    <p class="parrafo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia asperiores in, autem quos, velit minus quibusdam ex labore illo molestiae.</p>
                </div>
                <div class="numbers">
                    <div class="number">1671</div>
                    <div class="number">1671</div>
                    <div class="number">1671</div>
                    <div class="number">1671</div>
                </div>
            </div>
        </section>
        <section class="mission grid">
            <div class="textos-mission">
                <div class="texto-mission">
                    <h3>01 Starrups</h3>
                    <p>lorem lorem lorem khgkhghgkjhhgjkvhg</p>
                </div>
                <div class="texto-mission">
                    <h3>01 Starrups</h3>
                    <p>lorem lorem lorem khgkhghgkjhhgjkvhg</p>
                </div>
                <div class="texto-mission">
                    <h3>01 Starrups</h3>
                    <p>lorem lorem lorem khgkhghgkjhhgjkvhg</p>
                </div>
            </div>
            <div class="img-mission">
                <img src="img/undraw_Code_thinking_re_gka2.png" alt="" class="img">
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <?php
        include("Footer.html");
    ?>
</body>

</html>