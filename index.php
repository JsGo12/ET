
<?php
session_start();
$usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'usuario';
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Agency T&J</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img2/icon.png" rel="icon">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <style>
     .navbar-hidden {
        transform: translateY(-100%);
       transition: transform 0.3s ease-in-out;
      }
   </style>

<!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="assets/img2/icon.png" alt="logo" width="100"></a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php">Agency<span class="color-b">T&J</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" href="index.php">Inicio</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="about.html">Acerca de</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="property-grid.html">Propiedades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="agents-grid.html">Agentes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="services.php">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact.php">Contacto</a>
          </li>
          <li class="nav-item">
          <span class="nav-link">Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']); ?></span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="php/cerrar_sesion.php">Cerrar sesión</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <script>
    document.addEventListener('DOMContentLoaded', function() {
      let lastScrollTop = 0;
      const navbar = document.querySelector('.navbar');
  
      window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  
        if (scrollTop > lastScrollTop) {
          // Scroll down
          navbar.classList.add('navbar-hidden');
        } else {
          // Scroll up
          navbar.classList.remove('navbar-hidden');
        }
        lastScrollTop = scrollTop;
      });
    });
  </script>

      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>

    </div>
  </nav><!-- End Header/Navbar -->

  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img2/casa1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">La Florida
                      <br> 7834
                    </p>
                    <h1 class="intro-title mb-4 ">
                      <span class="color-b">200 </span> Monte
                      <br> Olivos Trauco
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">renta | 1080 UF</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img2/casa2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Peucos, Colina
                      <br> 4312
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">204 </span> Los valles
                      <br> conseratti 
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">renta | 1600 UF</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img2/casa4.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Mirador, Temuco
                      <br> 12112
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">204 </span> Alisson
                      <br> Matteu 
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">rent | 2500 UF</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img2/casa9.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
         <div class="table-cell">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="intro-body">
                  <p class="intro-title-top">Santiago, RM
                    <br> 541
                  </p>
                  <h1 class="intro-title mb-4">
                    <span class="color-b">541 </span> San Pablo
                    <br> Cautin 
                  </h1>
                  <p class="intro-subtitle intro-price">
                    <a href="#"><span class="price-a">renta | 300 UF</span></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img2/casa7.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <div class="intro-body">
                  <p class="intro-title-top">El Bosque, RM
                    <br> 1312
                  </p>
                  <h1 class="intro-title mb-4">
                    <span class="color-b">1312 </span> Capricornio
                    <br> Camino minado 
                  </h1>
                  <p class="intro-subtitle intro-price">
                    <a href="#"><span class="price-a">renta |    UF</span></a>
                  </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Servicios</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-cart"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c"></h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Tenemos a nuestra disposicion las mejores casas para que
                  pueda disfrutar de una cómoda vivienda a un como precio.
                  
                </p>
              </div>
              <div class="card-footer-c">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-calendar4-week"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c"></h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Tenemos disposicion de horario para una cómoda atencion,
                  contando con ejecutivos que lo atenderan las 24 hrs del día.
                  
                </p>
              </div>
              <div class="card-footer-c">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-card-checklist"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c"></h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Contamos con varias alternativas de pago para que  
                  elija la que guste, se recomienda indicar su método de pago preferido
                  para una mejor atención. 
                </p>
              </div>
              <div class="card-footer-c">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Ultimas Propiedades</h2>
              </div>
              <div class="title-link">
                <a href="property-grid.html">Todas las propiedades
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="assets/img2/casa5.jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="contact.html">206 Mount
                          <br /> Olive Road Two</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">renat | 1200 UF</span>
                      </div>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span>340m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Dormitorios</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baños</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Cocheras</h4>
                          <span>1</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="assets/img2/casa1.jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="contact.html">157 West
                          <br /> Central Park</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">renta | 7000 UF</span>
                      </div>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span>700m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Dormitorios</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baños</h4>
                          <span>2</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Cocheras</h4>
                          <span>2</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="assets/img2/casa10.jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="contact.html">1234
                          <br /> Puente Alto</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">renta | 700 UF</span>
                      </div>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span>500m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Dormitorios</h4>
                          <span>3</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baños</h4>
                          <span>1</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Cocheras</h4>
                          <span>0</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="assets/img2/casa7.jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="contact.html">204 Montal
                          <br /> South Bela Two</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">renta | 800 UF</span>
                      </div>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span>900m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Dormitorios</h4>
                          <span>1</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baños</h4>
                          <span>1</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span>2</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Latest Properties Section -->

    

    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Testimonios</h2>
              </div>
            </div>
          </div>
        </div>

        <div id="testimonial-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                      <img src="assets/img2/pareja1.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        Estamos contentos con poder dar nuestra opinion y la verdad es que en
                        Agency T&J nos dieron todas las facilidades y comodidades para tener una compra
                        rapida y segura, tambien nos guiaron efectivamente a la hora de la seleccion de la casa.
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <h5 class="testimonial-author">Jose & Maria</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                      <img src="assets/img2/pareja2.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        Al principio no estabamos muy seguros de contactarnos con 
                        T&J pero en la actualidad nos sentimos muy felices por haber tomado esa desición.
                        Su equipo de asesoría fue de mucha ayuda y nos guió durante 
                        todo el proceso para poder encontrar la casa ideal.
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <h5 class="testimonial-author">Juan & Katy</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div id="app"></div>
            <script scr="index.js" type="module"></script>

          </div>
        </div>
        <div class="testimonial-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Agency T&J</h3>
            </div>
            <div class="w-body-z">
              <p class="w-text-a color-text-z">
                Si tienes alguna consulta o inquietud que necesites resolver,
                no dudes en ponerte en contacto con nosotros.
                Estamos aquí para ayudarte.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-z">
                  <span class="color-text-z">Fono .</span> +54 356 945234
                </li>
                <li class="color-z">
                  <span class="color-text-z">Email .</span> Agency_T&J@gmail.com
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Nuestra compañia</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">  
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Legal</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Transparencia de datos</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Afiliados</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Politica de privacidad</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Sedes internacionales</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="https://es.wikipedia.org/wiki/Espa%C3%B1a">España</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="https://es.wikipedia.org/wiki/Chile">Chile</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="https://es.wikipedia.org/wiki/Argentina">Argentina</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="https://es.wikipedia.org/wiki/Brasil">Brasil</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="index.html">Inicio</a>
              </li>
              <li class="list-inline-item">
                <a href="about.html">Acerca de</a>
              </li>
              <li class="list-inline-item">
                <a href="property-grid.html">Propiedades</a>
              </li>
              <li class="list-inline-item">
                <a href="contact.html">Contacto</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-z">
              &copy; Copyright
              <span class="color-z">Agency T&J</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            Designed by <a href="https://www.oracle.com/cl/">T&J corporation</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
