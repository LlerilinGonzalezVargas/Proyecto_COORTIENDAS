<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Vuelo Santa Marta</title>

    <!-- Favicon  -->
    <link rel="icon" href="images\Faviconn.png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
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
    <!-- ##### Header Area End ##### -->

    <section class="ftco-cover" style="height: 780px; background-image: url(images/image_6.jpg);" id="section-home" data-aos="fade"  data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center ftco-vh-100">
          <div class="col-md-7">
            <h1 class="ftco-heading mb-3" data-aos="fade-up" data-aos-delay="500">Producto</h1>
            <h2 class="h5 ftco-subheading mb-5" data-aos="fade-up"  data-aos-delay="600"></h2>
          </div>
        </div>
      </div>
    </section>
<br><br><br>
    <!-- ##### Right Side Cart Area ##### -->


    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel">
                <img src="images/edited.jpg" alt="">
                <img src="images/image_5.jpg" alt="">
                <img src="images/image_6.jpg" alt="">
            </div>
        </div>

        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">
            <span>Avianca</span>
            <a href="cart.html">
                <h2>Vuelo Santa Marta</h2>
            </a>
            <p class="product-price"><span class="old-price">$80.000</span> $55.000</p>
            <p class="product-desc">Mágica ciudad levantada a orillas del Caribe, rodeada de imponentes murallas y fortificaciones que alguna vez la protegieron de ataques de piratas y corsarios. Declarada hoy Patrimonio de la Humanidad por la Unesco, maravilla por la preservación de su identidad colonial, con calles adoquinadas por donde el tiempo pareciera no haber transcurrido, entre plazoletas una más bella que otra y coloridas arquitecturas.</p>

            <!-- Form -->
            <form class="cart-form clearfix" method="post">
                <!-- Select Box -->
                <div class="select-box d-flex mt-50 mb-30">
                    <select name="select" id="productSize" class="mr-5">
                        <option value="value">Fecha</option>
                        <option value="value">10/Octubre/2020</option>
                        <option value="value">11/Diciembre/2021</option>
                        <option value="value">24/Enero/2020</option>
                        <option value="value">15/Mayo/2021</option>
                    </select>
                    <select name="select" id="productColor">
                        <option value="value">Clase</option>
                        <option value="value">Ejecutivo</option>
                        <option value="value">Economica</option>
                        <option value="value">Turista</option>
                    </select>
                </div>
                <!-- Cart & Favourite Box -->
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart -->
                    <button type="submit" name="addtocart" value="5" class="btn essence-btn">Añadir al carro</button>
                    <!-- Favourite -->
                    <div class="product-favourite ml-4">
                        <a href="#" class="favme fa fa-heart"></a>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- ##### Single Product Details Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Acerca de DAMALÚ</h2>
                <ul class="list-unstyled">
                  <li><a href="Sobre.html" class="py-2 d-block">¿Quiénes somos?</a></li>
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
    <!-- ##### Footer Area End ##### -->

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
    

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/pper.min.js"></script>
     <!-- Plugins js -->
    <script src="js/plug.js"></script>
      <!-- Active js -->
    <script src="js/ac.js"></script>

</body>

</html>