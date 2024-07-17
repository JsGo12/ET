<?php
session_start();
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

  <style>
    .navbar-hidden {
      transform: translateY(-100%);
      transition: transform 0.3s ease-in-out;
    }
    #cart-items {
      list-style-type: none;
      padding: 0;
    }
    #cart-items li {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
    }
    .services-grid {
      padding: 20px 0;
      background-color: #f8f9fa;
    }
    .service-card {
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
      height: 100%;
    }
    .service-card:hover {
      transform: translateY(-5px);
    }
    .service-img {
      height: 250px;
      overflow: hidden;
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;
    }
    .service-img img {
      width: 100%;
      height: 100%;
      object-fit: center;
    }
    .service-content {
      padding: 20px;
    }
    .service-title {
      font-size: 1.5rem;
      margin-bottom: 10px;
      color: #333;
    }
    .service-description {
      font-size: 1rem;
      color: #666;
      margin-bottom: 20px;
    }
    .service-price {
      font-size: 1.2rem;
      font-weight: bold;
      color: #2eca6a;
      margin-bottom: 10px;
    }
    .btn-primary {
      background-color: #2eca6a;
      border-color: #2eca6a;
    }
    .btn-primary:hover {
      background-color: #28a745;
      border-color: #28a745;
    }
  </style>
</head>
<body>
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
            <a class="nav-link " href="{% url 'servicios' %}">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact.php">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="php/cerrar_sesion.php">Cerrar sesión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="cart-icon">
              <i class="bi bi-cart"></i> <span id="cart-count">0</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <main id="main">
    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Servicios</h1>
              <span class="color-text-z"></span>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Services Grid ======= -->
    <section class="services-grid">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="service-card">
              <div class="service-img">
                <img src="assets/img2/asesoramiento.png" alt="Asesoramiento" class="img-fluid">
              </div>
              <div class="service-content">
                <h3 class="service-title">Asesoramiento</h3>
                <p class="service-description">Confíe en nuestros expertos para obtener el mejor asesoramiento inmobiliario.
                   Ya sea que esté comprando, vendiendo, o buscando invertir, nuestros asesores profesionales
                  le proporcionarán el consejo y apoyo necesarios para lograr sus objetivos con éxito.</p>
                  <p class="service-price">Precio: $150.000 CLP</p>
                  <a href="#" class="btn btn-primary add-to-cart" data-service="Asesoramiento" data-price="150000">Agregar al carrito</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="service-card">
              <div class="service-img">
                <img src="assets/img2/man_obra.png" alt="Mano de obra" class="img-fluid">
              </div>
              <div class="service-content">
                <h3 class="service-title">Mano de obra</h3>
                <p class="service-description">Ofrecemos servicios de mano de obra especializados
                  y de alta calidad, diseñados para satisfacer las necesidades de un proyecto en su vivienda,
                   ya sea que esté planificando una pequeña remodelación o una de gran escala.</p>
                   <p class="service-price">Precio: $150.000 CLP</p>
                   <a href="#" class="btn btn-primary add-to-cart" data-service="Asesoramiento" data-price="150000">Agregar al carrito</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="service-card">
              <div class="service-img">
                <img src="assets/img2/revision.png" alt="Analítica inmobiliaria" class="img-fluid">
              </div>
              <div class="service-content">
                <h3 class="service-title">Analítica inmobiliaria </h3>
                <p class="service-description">Realizar una completa revisión de tu propiedad hecha por un inspector, el cual 
                  examina los aspectos estructurales de la casa, los sistemas de
                   la instalación eléctrica, el agua, la plomería y los
                  desagües para garantizar que funcionen correctamente.</p>
                  <p class="service-price">Precio: $300.000 CLP</p>
                  <a href="#" class="btn btn-primary add-to-cart" data-service="Analítica inmobiliaria" data-price="300000">Agregar al carrito</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  <!-- Modal del carrito -->
  <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cartModalLabel">Carrito de servicios</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="cart-items">
          <!-- Los items del carrito se agregarán aquí dinámicamente -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" id="checkout-btn">Proceder al pago</button>
        </div>
      </div>
    </div>
  </div>

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

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const cart = [];
      const addToCartButtons = document.querySelectorAll('.add-to-cart');
      const cartIcon = document.getElementById('cart-icon');
      const cartCount = document.getElementById('cart-count');
      const cartItems = document.getElementById('cart-items');
      const checkoutBtn = document.getElementById('checkout-btn');
    
      addToCartButtons.forEach(button => {
        button.addEventListener('click', function(e) {
          e.preventDefault();
          const service = this.getAttribute('data-service');
          const price = parseFloat(this.getAttribute('data-price'));
          cart.push({service, price});
          updateCartCount();
          Swal.fire({
            title: '¡Agregado!',
            text: `${service} ha sido agregado al carrito`,
            icon: 'success',
            confirmButtonText: 'OK'
          });
        });
      });
    
      cartIcon.addEventListener('click', function(e) {
        e.preventDefault();
        updateCartModal();
        new bootstrap.Modal(document.getElementById('cartModal')).show();
      });
    
      checkoutBtn.addEventListener('click', function() {
        Swal.fire({
          title: 'Procesando el pago',
          text: 'Por favor espere...',
          icon: 'info',
          showConfirmButton: false,
          timer: 2000
        }).then(() => {
          Swal.fire('¡Pago completado!', 'Gracias por su compra', 'success');
          cart.length = 0; // Clear the cart
          updateCartCount();
          updateCartModal();
        });
      });
    
      function updateCartCount() {
        cartCount.textContent = cart.length;
      }
    
      function updateCartModal() {
      cartItems.innerHTML = '';
      let total = 0;
      cart.forEach((item, index) => {
      const li = document.createElement('li');
      li.textContent = `${item.service} - $${item.price.toLocaleString('es-CL')} CLP`;
    
      const deleteButton = document.createElement('button');
      deleteButton.textContent = 'Eliminar';
      deleteButton.classList.add('btn', 'btn-danger', 'btn-sm', 'ms-2');
      deleteButton.addEventListener('click', function() {
      removeFromCart(index);
      });
    
      li.appendChild(deleteButton);
      cartItems.appendChild(li);
      total += item.price;
    });

    const totalElement = document.createElement('li');
    totalElement.textContent = `Total: $${total.toLocaleString('es-CL')} CLP`;
    totalElement.style.fontWeight = 'bold';
    cartItems.appendChild(totalElement);
    }
    
      function removeFromCart(index) {
        Swal.fire({
          title: '¿Estás seguro?',
          text: "¿Quieres eliminar este item del carrito?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Sí, eliminar',
          cancelButtonText: 'Cancelar'
        }).then((result) => {
          if (result.isConfirmed) {
            cart.splice(index, 1);
            updateCartCount();
            updateCartModal();
            Swal.fire(
              '¡Eliminado!',
              'El item ha sido eliminado del carrito.',
              'success'
            );
          }
        });
      }
    });
  </script>
</body>
</html>