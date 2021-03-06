<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

      <!-- Title -->
    <title>Sobre Nosotros</title>

    <!-- Favicon -->
     <link rel="icon" href="images\Faviconn.png">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive-color.css" rel="stylesheet">

</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="mosh-preloader"></div>
    </div> 

   <!-- ***** Header Area Start ***** -->
    <header class="header_area sticky">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <!-- Menu Area Start -->
                <div class="col-12 h-100">
                    <div class="menu_area h-100">
                        <nav class="navbar h-100 navbar-expand-lg align-items-center">
                            <!-- Logo -->
                            <a class="navbar-brand" href="Inicio.php">DAMALÚ</a>

                            <!-- Menu Area -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mosh-navbar" aria-controls="mosh-navbar" aria-expanded="true" aria-label="Navegación de palanca"><span class="navbar-toggler-icon"></span></button>

                            <div class="navbar-collapse justify-content-end collapse show" id="mosh-navbar" style="">
                                   <ul class="navbar-nav animated" id="nav">
                                     <li class="nav-item"><a href="index_2.php" class="nav-link">EcoTours</a></li>
                                     <li class="nav-item"><a href="Vuelos.php" class="nav-link">Vuelos</a></li>
                                     <li class="nav-item"><a href="Hotel.php" class="nav-link">Hoteles</a></li>
                                     <li class="nav-item"><a href="Promociones.php" class="nav-link">Promociones</a></li>
                                     <li class="nav-item"><a href="Paquetes.php" class="nav-link">Plaquetes &amp; Turismo</a></li>
                                     <li class="nav-item"><a href="contact.php" class="nav-link">Contáctenos</a></li>
                                     
                                </ul>
                            </div>
                                <!-- Search Form Area Start -->
                                <div class="search-form-area animated">
                                    <form action="#" method="post">
                                        <input type="search" name="search" id="search" placeholder="¿Que Buscas?">
                                        <button type="submit" class="d-none"><img src="img/core-img/search-icon.png" alt="Buscar"></button>
                                    </form>
                                </div>
                                <!-- Search btn -->
                                <!-- Login/Register btn -->
                                <div class="login-register-btn">
                                    <?php 
                                      $host = "";
                                      $user = "root";
                                      $clave = "";
                                      $bd = "crud";
                                      $conexion = mysqli_connect($host,$user,$clave,$bd);

                                                  session_start();

                                            $usuario = $_SESSION['nombre']; 

                                                  echo " $usuario";

                                  ?>
                                </div>
                                <li class="nav-item"><a href="cerrar_session.php" class="nav-link" >Cerrar sesión</a></li>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="mosh-breadcumb-area" style="background-image: url(images/CV.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumbContent">
                        <h2>Sobre Nosotros</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">Lee Nuestra historia</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Few Words Area Start ***** -->
    <section class="few-words-from-ceo d-md-flex">
        <div class="few-words-contents d-flex align-items-center justify-content-center wow fadeInLeftBig" data-wow-delay="0.1s">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-11 col-lg-9 col-xl-7">
                        <div class="few-words-text">
                            <div class="section-heading">
                                <p>Información</p>
                                <h2>Quienes somos</h2>
                            </div>
                            <p style="color: white;">Somos, una empresa encarga de facilitarte la compra de tus viajes de forma segura y rapida, Nosotros queremos que conoscas el mundo de otra forma, cuidando los lugares a los que quieres viajar y que veas lo hermoso que es Colombia.</p>
                            <div class="ceo-meta-data d-flex align-items-center mt-50">
                                <div class="ceo-thumb bg-img" style="background-image: url(images/Faviconn.png);"></div>
                                <div class="ceo-name">
                                    <h6 style="color: white;">Empresa</h6>
                                    <p style="color: white;">DAMALÚ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="few-words-thumb bg-img wow fadeInRightBig" data-wow-delay="1.1s" style="background-image: url(images/image.png);"></div>
    </section>
    <!-- ***** Few Words Area End ***** -->

     <!-- ***** About Us Area Start ***** -->
    <section class="mosh-aboutUs-area section_padding_100_0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="mosh-about-us-content">
                        <div class="section-heading">
                            <h2>Nuestra historia</h2>
                        </div>
                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio ves tibul. Nec odio vestibulum est mattis effic iturut magna. Pellente sque sita met tellus blandit. Etiam nec odio. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mosh-about-us-thumb wow fadeInUp" data-wow-delay="0.5s">
                        <img src="img/bg-img/headpiece.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Features Area Start ***** -->
    <section class="mosh-about-features-area section_padding_100">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-md-4">
                    <div class="mosh-features-thumb wow fadeIn" data-wow-delay="0.5s">
                        <img src="img/bg-img/features-2.png" alt="">
                    </div>
                </div>

                <div class="col-12 col-md-8">
                    <div class="mosh-about-us-content">
                        <div class="section-heading">
                            <h2>Conocenos</h2>
                        </div>
                        <div class="row">
                            <!-- Single Feature Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-feature-area d-flex">
                                    <div class="feature-icon mr-30">
                                        <img src="img/core-img/settings-2.png" alt="">
                                    </div>
                                    <div class="feature-content">
                                        <h5>Instagram</h5>
                                        <p>Sorprendete con fotos maravillosas de nuestros destinos</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Feature Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-feature-area d-flex">
                                    <div class="feature-icon mr-30">
                                        <img src="img/core-img/photo-camera.png" alt="">
                                    </div>
                                    <div class="feature-content">
                                        <h5>Facebook</h5>
                                        <p>Esta al dia con nustros grandes descuentso</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Feature Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-feature-area d-flex">
                                    <div class="feature-icon mr-30">
                                        <img src="img/core-img/like.png" alt="">
                                    </div>
                                    <div class="feature-content">
                                        <h5>Twitter</h5>
                                        <p>Conoces nuestras historias</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Feature Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-feature-area d-flex">
                                    <div class="feature-icon mr-30">
                                        <img src="img/core-img/gamepad.png" alt="">
                                    </div>
                                    <div class="feature-content">
                                        <h5>Gmail</h5>
                                        <p>Contactanos en cualquier momento</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Area End ***** -->

    <!-- ***** Team Area Start ***** -->
   <section class="mosh-team-area section_padding_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="section-heading text-center">
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">DAMALÚ</font></font></p>
                        <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Conoce a nuestro eficiente equipo</font></font></h2>
                        
                    </div>
                </div>
            </div>

                        <div class="row">
                <div class="col-12">
                    <div class="mosh-team-slides owl-carousel">
                        <!-- Single Team Slide -->
                        <div class="single-team-slide text-center">
                            <!-- Thumbnail -->
                            <div class="team-thumbnail">
                                <img src="images/Marian.jpg" alt="">
                            </div>
                            <!-- Meta Info -->
                            <div class="team-meta-info">
                                <h4>Marian Rivas</h4>
                                <span>Administracion</span>
                                <p>Atencion al cliente </p>
                            </div>
                            <!-- Social Info -->
                            <div class="team-social-info">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Single Team Slide -->
                        <div class="single-team-slide text-center">
                            <!-- Thumbnail -->
                            <div class="team-thumbnail">
                                <img src="img/bg-img/c-2.jpg" alt="">
                            </div>
                            <!-- Meta Info -->
                            <div class="team-meta-info">
                                <h4>Julian Aya</h4>
                                <span>Programador</span>
                                <p></p>
                            </div>
                            <!-- Social Info -->
                            <div class="team-social-info">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Single Team Slide -->
                        <div class="single-team-slide text-center">
                            <!-- Thumbnail -->
                            <div class="team-thumbnail">
                                <img src="images/Fotox.jpg" alt="">
                            </div>
                            <!-- Meta Info -->
                            <div class="team-meta-info">
                                <h4>Daniel Soto</h4>
                                <span>Gerente/Programador</span>
                                <p></p>
                            </div>
                            <!-- Social Info -->
                            <div class="team-social-info">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- Single Team Slide -->
                        <div class="single-team-slide text-center">
                            <!-- Thumbnail -->
                            <div class="team-thumbnail">
                                <img src="images/FATO.jpg" alt="">
                            </div>
                            <!-- Meta Info -->
                            <div class="team-meta-info">
                                <h4>Luisa Prieto</h4>
                                <span>Contabilidad</span>
                                <p></p>
                            </div>
                            <!-- Social Info -->
                            <div class="team-social-info">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mosh-subscribe-newsletter-area bg-img bg-overlays-white section_padding_100" style="background-image: url(images/SRC.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="subscribe-newsletter-content text-center wow fadeIn" data-wow-delay="0.5s">
                        <p>¿Quieres conocer muchas descuentos en tiempo real?</p>
                        <h2>Suscribete a nuestro correo de notificaciones </h2>
                        <form action="#">
                            <input type="email" name="email" id="Email" placeholder="Ingresa tu correo aqui">
                            <button type="submit">Suscribete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Footer Area Start ***** -->
<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Acerca de DAMALÚ</h2>
                <ul class="list-unstyled">
                  <li><a href="Sobre.php" class="py-2 d-block">¿Quiénes somos?</a></li>
                  <li><a href="#" class="py-2 d-block">Preguntas frecuentes</a></li>
                  <li><a href="#" class="py-2 d-block">Términos y condiciones</a></li>
                  <li><a href="#" class="py-2 d-block">Política de privacidad</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
               <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Ofertas</h2>
                <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block">Hotsale</a></li>
                  <li><a href="#" class="py-2 d-block">Tiquetes baratos</a></li>
                  <li><a href="#" class="py-2 d-block">CyberLunes</a></li>
                  <li><a href="#" class="py-2 d-block">Black Friday</a></li>
                  <li><a href="#" class="py-2 d-block">Cyber Days</a></li>
                </ul>
              </div>
            </div>
            
        <div class="col-md-4">
          <div class="ftco-footer-widget mb-4">
            <ul class="ftco-footer-social list-unstyled float-md-right float-lft">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </i> 
        </div>
      </div>
    </div>
  </footer>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap2.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/carrito.js"></script>
    <script src="js/pedido.js"></script>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>