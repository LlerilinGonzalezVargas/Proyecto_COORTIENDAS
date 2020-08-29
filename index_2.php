<!DOCTYPE html>
  
<html lang="en">
  <head>
    <title>DAMALÚ Inicio </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
       <link rel="stylesheet" href="css/Estilos extra.css">

    <link rel="image_src" href="/images/immersive_slider_image.png" />

  <meta content="http://www.thepetedesign.com/demos/immersive_slider_demo.html" property="og:url" />
  <meta content="http://www.thepetedesign.com/images/immersive_slider_image.png" property="og:image" />

  <link rel="canonical" href="http://www.thepetedesign.com/demos/immersive_slider_demo.html" />
  <link href='immersive-slider.css' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <form action="Validar.php" method="post" accept-charset="utf-8">
   
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" data-aos="fade-down" data-aos-delay="500">
      <div class="container">
        <a class="navbar-brand" href="Inicio.php">DAMALÚ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menú
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index_2.php" class="nav-link">EcoTours</a></li>
            <li class="nav-item"><a href="Vuelos.php" class="nav-link">Vuelos</a></li>
            <li class="nav-item"><a href="Hotel.php" class="nav-link">Hoteles</a></li>
            <li class="nav-item"><a href="Promociones.php" class="nav-link">Promociones</a></li>
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
        <div class="row align-items-center ftco-vh-100">
          <div class="col-md-7">
            <h1 class="ftco-heading mb-3" data-aos="fade-up" data-aos-delay="500">Disfruta de viajes inolvidables con tu mejor aliado, DAMALÚ</h1>
            <h2 class="h5 ftco-subheading mb-5" data-aos="fade-up"  data-aos-delay="600"></h2>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="ftco-section" id="section-about">
      <div class="container">
        <div class="row">
          <div class="col-md-12  mb-5" data-aos="fade-up">
            <h1 class="ftco-heading heading-thin mb-5">EcoTours increibles para conocer el mundo de otra manera</h1>
          </div>
        </div>
        
      </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Mira muchas cosas más!!!</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="mosh-projects-menu">
            <div class="text-center portfolio-menu">
                <p class="active" data-filter="*">Todo</p>
                <p data-filter=".gd">EcoTours</p>
                <p data-filter=".bi">Vuelos</p>
                <p data-filter=".pho">Promociones</p>
                <p data-filter=".wd">Paquetes&Turismo</p>
                <p data-filter=".pc">Hoteles</p>

            </div>
        </div>
        <div class="mosh-portfolio">
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item ">
                <img src="images/SantaMarta.jpg" alt="" width="200" height="325">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>Vuelo</h4>
                        <a href="Producto.php">Santa Marta</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item gd">
                <img src="images/menu_1.jpg" alt="" width="200" height="325">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>EcoTour</h4>
                        <a href="Producto.php">Guican</a>
                    </div>
                </div>
            </div>
            <!-- Single gallery Item Start -->
            <div class="single_gallery_item wd pc">
                <img src="images/menu_2.jpg" alt="" width="200" height="325">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>Hotel</h4>
                        <a href="Producto.php">Sanata Fe (Antioquia)</a>
                    </div>
                </div>
              </div>
          <div class="single_gallery_item wd gd">
                <img src="images/image_4.jpg" alt="" width="150" height="325">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>Paquete</h4>
                        <a href="Producto.php">Todo incluido a Cartagena</a>
                    </div>
                </div>
            </div>
          <div class="single_gallery_item  gd">
                <img src="images/menu_3.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>EcoTour</h4>
                        <a href="Producto.php">La Guajira</a>
                    </div>
                </div>
            </div>
          <div class="single_gallery_item bi">
                <img src="images/MO.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>Vuelo</h4>
                        <a href="Producto.php">Medellin</a>
                    </div>
                </div>
            </div>
          <div class="single_gallery_item bi pho">
                <img src="images/offer_1.jpg" alt="" width="200" height="320">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>Vuelos</h4>
                        <a href="Producto.php">Putumayo</a>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item pc bi">
                <img src="images/P.jpg" alt="" width="200" height="320">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>Promocion Paquete</h4>
                        <a href="Producto.php">Cartagena</a>
                    </div>
                </div>
            </div>
          <div class="single_gallery_item gd pc">
                <img src="images/person_1.jpg" alt="" width="200" height="320">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center">
                        <h4>Eco tuor + Hotel</h4>
                        <a href="Producto.php">Guatape </a>
                    </div>
                </div>
            </div>
           <div class="single_gallery_item pho wd">
                <img src="images/R.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center" width="0" height="225">
                        <h4>EcoTour + Vuelo</h4>
                        <a href="Producto.php">Cartagena</a>
                    </div>
                </div>
            </div>
            <div class="single_gallery_item pho wd">
                <img src="images/SRC.jpg" alt="">
                <div class="gallery-hover-overlay d-flex align-items-center justify-content-center">
                    <div class="port-hover-text text-center" width="0" height="225">
                        <h4>Hospedaje + Transporte</h4>
                        <a href="Producto.php">Amazonas</a>
                    </div>
                </div>
            </div>
          </div>
          </div>

        </section>


    <div class="ftco-section">
    <div class="container">
      <div class="block-3 d-md-flex" data-aos="fade-left">
        <div class="image" style="background-image: url('images/image_5.jpg'); "></div>
        <div class="text">
          <h4 class="subheading">Vuelo increible a San Andres:</h4>
          <h2 class="heading">Sorprendete!!</h2>
          <p>El archipiélago de San Andrés, Providencia y Santa Catalina es un departamento colombiano situado en el medio del mar Caribe, a 775 Km del Nord-este de la costa. La capital de este departamento es San Andrés. Este conjunto está considerado como un lugar paradisiaco que posee las más bellas playas de Colombia e incluso del Caribe</p>
          <a href="Producto.php" class="btn DAMALÚ-btn">Ver mas...</a>
        </div>
      </div>
      <div class="block-3 d-md-flex" data-aos="fade-right">
        <div class="image order-2" style="background-image: url('images/image_6.jpg'); "></div>
        <div class="text order-1">
          <h4 class="subheading">Vuelo increible con  EcoTour a Santa Marta</h4>
          <h2 class="heading">Sueña</h2>
          <p>Santa Marta es sabrosa; es una ciudad donde la diversidad está presente en su territorio, en su gente y en cada aspecto cultural que la compone, es un destino que acoge a todos sus visitantes y los hace sentir como en casa. </p>
          <a href="Producto.php" class="btn DAMALÚ-btn">Ver mas...</a>
        </div>
      </div>
      <div class="block-3 d-md-flex" data-aos="fade-left">
        <div class="image" style="background-image: url('images/1.jpg'); "></div>
        <div class="text">
          <h4 class="subheading">Cartagena incrible lugar para darte una vuelta :)
          ¿''''</h4>
          <h2 class="heading">MEJORA!!</h2>
          <p>Mágica ciudad levantada a orillas del Caribe, rodeada de imponentes murallas y fortificaciones que alguna vez la protegieron de ataques de piratas y corsarios. Declarada hoy Patrimonio de la Humanidad por la Unesco, maravilla por la preservación de su identidad colonial, con calles adoquinadas por donde el tiempo pareciera no haber transcurrido, entre plazoletas una más bella que otra y coloridas arquitecturas.  </p>
          <a href="Producto.php" class="btn DAMALÚ-btn">Ver mas...</a>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

  <div class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center"  data-aos="fade-up">
          <h2>Increible con DAMALÚ</h2>
        </div>
      </div>

<div class="row">
        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a href="Vuelos.html" class="block-5" style="background-image: url('images/bg.jpeg');">
            <div class="text">
              <div class="subheading">Travel</div>
              <h3 class="heading">Vuelos</h3>
              <div class="post-meta">
                <span>Promociones increibles para que puedas viajar a cualquier destino de pais</span>
                <span>Interesate</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <a href="Paquetes.html" class="block-5" style="background-image: url('images/BARRA.jpg');">
            <div class="text">
              <div class="subheading">Travel</div>
              <h3 class="heading">Paquetes De Viajes</h3>
              <div class="post-meta">
                <span>Encuentra paquetes turiticos para ti o para tu familia</span>
                <span>Hazlo ahora </span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <a href="blog.html" class="block-5" style="background-image: url('images/Nieve.jpg');">
            <div class="text">
              <div class="subheading">Travel</div>
              <h3 class="heading">Promociones del mes </h3>
              <div class="post-meta">
                <span>Disfruta de un viaje increible a Santa Marta solo por el mes de septiembre</span>
                <span>Pruebalo ya!!</span>
              </div>
            </div>
          </a>
        </div>
      </div>

    </div>
  </div>

  <!-- ***** CTA Area Start ***** -->
    <section class="mosh-call-to-action-area bg-img bg-overlays section_padding_100" style="background-image: url(images/cta.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content text-center wow fadeIn" data-wow-delay="0.5s">
                        <div class="section-heading">
                            <p>DAMALÚ ;)</p>
                            <h2>¿Alguna duda?</h2>
                            <a href="contact.php" class="btn mosh-btn">Contactanos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** CTA Area End ***** -->

  
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
              <li class="ftco-animate"><a href="https://www.facebook.com/Damal%C3%BA-100867084625835/?modal=admin_todo_tour"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="https://www.instagram.com/agenciadamalu/"><span class="icon-instagram"></span></a></li>
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
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="jquery.immersive-slider.js"></script>

  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="js/jquery.immersive-slider.js"></script>


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
    

      <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/carrito.js"></script>
    <script src="js/pedido.js"></script>

  </body>
</html>