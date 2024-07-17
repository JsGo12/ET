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
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

  <style>
    .bg-blue {
      background-color: #1509f6; 
      color: white;
      padding: 50px 0;
      margin-top: 50px;
    }
    
    .contact-info h2, .contact-info h4 {
      margin-bottom: 20px;
    }
    
    .contact-info p {
      margin-bottom: 10px;
    }
    
    .contact-info i {
      margin-right: 10px;
    }
  </style>
  <style>
    .form-group {
      margin-bottom: 1.5rem;
    }
    .form-control, select {
      margin-top: 0.5rem;
    }
    .btn-primary {
      margin-top: 1.5rem;
    }
    #map {
      height: 300px;
      width: 100%;
      margin-top: 2rem;
    }
    .centered-form {
      display: flex;
      justify-content: center;
    }
  </style>
  <style>
    body, html {
      height: 100%;
      margin: 0;
      padding: 0;
    }
    
    body {
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      padding-top: 200px; 
    }
    
    body::before {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      background-image: url('assets/img2/fondo2.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      filter: blur(8px);
      -webkit-filter: blur(8px);
    }
    
    .container, .intro-single, .contact, .contact-info {
      background-color: transparent;
      padding: 20px;
    }
    
    .navbar {
      background-color: white;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1030;
    }
    
    .nav-link {
      color: black; 
    }
    
    .title-single, .color-text-a, .breadcrumb, form label {
      color: white;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);
    }
    
    .form-control, select, textarea {
      background-color: rgba(255, 255, 255, 0.2);
      color: white;
    }
    
    .form-control::placeholder {
      color: rgba(255, 255, 255, 0.7);
    }
    
    .btn-primary {
      background-color: #1509f6;
      border-color: #1509f6;
    }
    
    .btn-primary:hover {
      background-color: #0d06b3;
      border-color: #0d06b3;
    }
    
    #map {
      background-color: rgba(255, 255, 255, 0.2);
    }

    .bg-blue {
      background-color: rgba(21, 9, 246, 0.7) !important;
    }

    main {
      margin-top: 20px; 
    }
</style>
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

  <main id="main">
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Agendar Reunión</h1>
              <span class="color-text-a">Para poder agendar una reunión deberás completar los siguientes datos personales
                 y elegir la casa de tu interés y el agente por el cual quisieras ser asesorado.</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Inicio</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Contacto
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <section class="contact">
      <div class="container">
        <div class="row">
          <div  class="col-sm-12 section-t8">
            <div class="row centered-form">
              <div class="col-md-8">
                <form action="php/guardar_solicitud.php" method="POST" class="contenedor">
                  <div class="form-group">
                    <label for="name">Nombre completo:</label>
                    <input type="text" name="nombre_completo" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" name="correo" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="agente">Agente inmobiliario:</label>
                    <select name="agente" class="form-control" required>
                      <option value="">Selecciona un agente</option>
                      <option value="Antonia Gutierrez">Antonia Gutierrez</option>
                      <option value="Guillermo Del Toro">Guillermo Del Toro</option>
                      <option value="Filipo Pinilla">Filipo Pinilla</option>
                      <option value="Alejandro Guzman">Alejandro Guzman</option>
                      <option value="Luis Jackson">Luis Jackson</option>
                      <option value="Karlos Tre">Karlos Tre</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="propiedad">Propiedad:</label>
                    <select name="propiedad" class="form-control" required>
                      <option value="">Selecciona una propiedad</option>
                      <option value="Carbonero 1042">Carbonero 1042</option>
                      <option value="Erasmo 2212">Erasmo 2212</option>
                      <option value="Capricornio 1312">Capricornio 1312</option>
                      <option value="Pablo poelo 5531">Pablo poelo 5531</option>
                      <option value="San Pablo 541">San Pablo 541</option>
                      <option value="Amazonas 5644s">Amazonas 5644</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="datepicker">Fecha de reunión:</label>
                    <input id="datepicker" name="fecha" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="timepicker">Hora de reunión:</label>
                    <select id="timepicker" name="hora" class="form-control" required>
                    </select>
                  </div>
                  <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div id="map"></div>
        </div>
      </div>
    </div>
    <section class="contact-info bg-blue">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="mb-4 text-white">Información de Contacto</h2>
          </div>
          <div class="col-md-6">
            <h4 class="text-white">Agency T&J</h4>
            <p class="text-white"><i class="bi bi-geo-alt"></i> Dirección: Av. Libertador 1234, Santiago, Chile</p>
            <p class="text-white"><i class="bi bi-telephone"></i> Teléfono: +56 2 2345 6789</p>
            <p class="text-white"><i class="bi bi-envelope"></i> Email: Agency_T&J@gmail.com</p>
          </div>
          <div class="col-md-6">
            <h4 class="text-white">Horario de Atención</h4>
            <p class="text-white">Lunes a Viernes: 9:00 AM - 6:00 PM</p>
            <p class="text-white">Sábados: 10:00 AM - 2:00 PM</p>
            <p class="text-white">Domingos y Festivos: Cerrado</p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#datepicker').datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayHighlight: true
      });

      var timePicker = $('#timepicker');
      for (var hour = 8; hour < 21; hour++) {
        var hourString = ('0' + hour).slice(-2);
        timePicker.append($('<option></option>').val(hourString + ':00').html(hourString + ':00'));
      }

      $('#agent, #property, #timepicker').select2({
        theme: 'bootstrap4',
        width: '100%'
      });
    });
  </script>
  <script>
    function initMap() {
      var location = { lat: -33.4372, lng: -70.6506 };
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: location
      });
      var marker = new google.maps.Marker({
        position: location,
        map: map
      });
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=initMap" async defer></script>
</body>
</html>