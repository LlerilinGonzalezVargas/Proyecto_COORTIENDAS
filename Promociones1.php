<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Promociones</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="images\Faviconn.png">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">
    <link href="css/responsive-color.css" rel="stylesheet">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animateda.css">
    <link rel="stylesheet" href="css/owl.min.css">


    <link rel="stylesheet" href="css/jquery.DonutWidget.min.css">


    
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" data-aos="fade-down" data-aos-delay="500">
      <div class="container">
        <a class="navbar-brand" href="Inicio.php">DAMALÚ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="oi oi-menu"></span> Menú
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item "><a href="index_2.php" class="nav-link">EcoTours</a></li>
            <li class="nav-item"><a href="Vuelos.php" class="nav-link">Vuelos</a></li>
            <li class="nav-item"><a href="Hotel.php" class="nav-link">Hoteles</a></li>
            <li class="nav-item active"><a href="Promociones.php" class="nav-link">Promociones</a></li>
            <li class="nav-item"><a href="Paquetes.php" class="nav-link">Plaquetes &amp; Turismo</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contáctenos</a></li>
          </ul>
          <!-- Search Form Area Start -->
                                <div class="search-form-area animated">
                                    <form action="#" method="post">
                                        <input type="search" name="search" id="search" placeholder="¿Que Buscas?">
                                        <button type="submit" class="d-none"><img src="img/core-img/search-icon.png" alt="Buscar"></button>
                                    </form>
                                </div>
                                <!-- Search btn -->
                                <div class="search-button">
                                    <a href="#" id="search-btn"><img src="img/core-img/search-icon.png" alt="Buscar"></a>
                                </div>
                                <div class="login-register-btn" >
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
      </div>
    </nav>
    <!-- END nav -->


    <section class="ftco-cover" style="background-image: url(images/PE.jpg);" id="section-home" data-aos="fade"  data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center ftco-vh-75">
          <div class="col-md-7">
            <h1 class="ftco-heading mb-3" data-aos="fade-up" data-aos-delay="500">Promociones</h1>
            <h2 class="h5 ftco-subheading mb-5" data-aos="fade-up"  data-aos-delay="600">Disfruta de nuestros descuentos increibles para tus viajes</h2>    
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

            
         

   
 <div class="ftco-section">
    <div class="container">
      <div class="row">
          <div class="col-md-6 col-lg-4" data-aos="fade-up">
            <a href="blog-single.html" class="block-5" style="background-image: url('images/Avion_Playa.jpg');">
              <div class="text">
                <div class="subheading">Travel</div>
                <h3 class="heading">Encuentra una hermosa playa en cartagena</h3>
                <div class="post-meta">
                  <span>Vuelo</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a href="blog-single.html" class="block-5" style="background-image: url('images/CA.jpg');">
              <div class="text">
                <div class="subheading">Travel</div>
                <h3 class="heading">Quedate a descansar en un asombroso lugar</h3>
                <div class="post-meta">
                  <span>Hotel</span>
                 </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <a href="blog-single.html" class="block-5" style="background-image: url('images/C.jpg');">
              <div class="text">
                <div class="subheading">Travel</div>
                <h3 class="heading">Gran promocion</h3>
                <div class="post-meta">
                  <span>Paquete</span>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="fade-up">
            <a href="blog-single.html" class="block-5" style="background-image: url('images/DS.jpg');">
              <div class="text">
                <div class="subheading">Travel</div>
                <h3 class="heading">Sorprendete con grandes vistas </h3>
                <div class="post-meta">
                  <span>Hospedaje</span>
                  <span>March 20, 2018</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <a href="blog-single.html" class="block-5" style="background-image: url('images/E.jpg');">
              <div class="text">
                <div class="subheading">Travel</div>
                <h3 class="heading">Camina por lugares sorprendentes</h3>
                <div class="post-meta">
                  <span>Eco tuor</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <a href="blog-single.html" class="block-5" style="background-image: url('images/CC.jpg');">
              <div class="text">
                <div class="subheading">Travel</div>
                <h3 class="heading">Viaja a un increible lugar</h3>
                <div class="post-meta">
                  <span>Vuelo</span>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="row">
              <div class="col-md-12 pt-5">
                <ul class="pagination custom-pagination">
                  <li class="page-item prev"><a class="page-link" href="#"><i class="icon-keyboard_arrow_left"></i></a></li>
                  <li class="page-item "><a class="page-link href="blog.php">1</a></li>
                  <li class="page-item active"><a class="page-link" href="Promociones1.php">2</a></li>
                  <li class="page-item"><a class="page-link" href="Promociones2.php">3</a></li>
                  <li class="page-item next"><a class="page-link" href="#"><i class="icon-keyboard_arrow_right"></i></a></li>
                </ul>
              </div>
            </div>
    </div>
  </div>
  

  
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart" aria-hidden="true"></i> 
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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


    <!-- ***** Footer Area End ***** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/Motpopper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/Onebootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Active js -->


  
    
    
  

</body>
</html>