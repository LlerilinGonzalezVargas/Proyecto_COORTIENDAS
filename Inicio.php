<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title  -->
    <title>DAMALÚ</title>

    <!-- Favicon  -->
    <link rel="icon" href="images/Faviconn.png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/Estilos extra.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/responsive-color.css" rel="stylesheet">

    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/flaticon.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="image_src" href="/images/immersive_slider_image.png" />

  <meta content="http://www.thepetedesign.com/demos/immersive_slider_demo.html" property="og:url" />
  <meta content="http://www.thepetedesign.com/images/immersive_slider_image.png" property="og:image" />

  <link rel="canonical" href="http://www.thepetedesign.com/demos/immersive_slider_demo.html" />
  <link href='immersive-slider.css' rel='stylesheet' type='text/css'>


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

    <section class="ftco-cover" style="background-image: url(images/PE.jpg);" id="section-home" data-aos="fade"  data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center ftco-vh-100">
          <div class="col-md-7">
            <h1 class="ftco-heading mb-3" data-aos="fade-up" data-aos-delay="500">Disfruta de viajes inolvidables con DAMALÚ</h1>
            <h2 class="h5 ftco-subheading mb-5" data-aos="fade-up"  data-aos-delay="600"></h2>
          </div>
        </div>
      </div>
    </section>

    <br><br>
<div class="container">
        <div class="row">
          <div class="col-md-12  mb-5" data-aos="fade-up">
            <h1 class="ftco-heading heading-thin mb-5">Encuentra grades promociones y descuentos para tus viajes. <center> DAMALÚ</center> </h1>
          </div>
        </div>


    <!-- ##### Top Catagory Area Start ##### -->
    <div class="top_catagory_area section-padding-80 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(images/3.jpg);">
                        <div class="catagory-content">
                            <a href="Vuelos.php">Vuelos</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(img/2.jpg);">
                        <div class="catagory-content">
                            <a href="index_2.php">Eco Tours</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(images/menu_2.jpg);">
                        <div class="catagory-content">
                            <a href="Hoteleria.php">Hoteleria</a>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(images/image_4.jpg);">
                        <div class="catagory-content">
                            <a href="Promociones.php">Promociones</a>
                        </div>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" style="background-image: url(images/offer_1.jpg);">
                        <div class="catagory-content">
                            <a href="Paquetes.php">Paquetes&Mas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Catagory Area End ##### -->
<br><br>
    <!-- ##### CTA Area Start ##### -->
    <div class="cta-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content bg-img background-overlay" style="background-image: url(img/3.jpg);">
                        <div class="h-100 d-flex align-items-center justify-content-end">
                            <div class="cta--text">
                                <h6>-45%</h6>
                                <h2>Promoción del dia</h2>
                                <h3>Eco tour</h3>
                                <a href="Producto.php" class="btn DAMALÚ-btn">Ver mas...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### CTA Area End ##### -->
<br>
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


<section class="new_arrivals_area ">
                    <div class="section-heading ">
                        <h2 style="width:10  1000px; ">Mas productos</h2>
                    </div>

    <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular-products-slides owl-carousel">

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="images/1.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="images/2.jpg" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Eco tour</span>
                                <a href="Producto.php">
                                    <h6>Caminata en Santa Marta</h6>
                                </a>
                                <p class="product-price">$80.000</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="Producto.php" class="btn DAMALÚ-btn">Ver mas...</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="images/11.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="images/3.jpg" alt="">
                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Cartagena</span>
                                <a href="Producto.php">
                                    <h6>Vuelo</h6>
                                </a>
                                <p class="product-price">$150.000</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="Producto.php" class="btn DAMALÚ-btn">Ver mas...</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="images/GTPE.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="images/image_4.jpg" alt="">

                                <!-- Product Badge -->
                                <div class="product-badge offer-badge">
                                    <span>-30%</span>
                                </div>

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Hoteleria</span>
                                <a href="Producto.php">
                                    <h6>Estadia en Medellin</h6>
                                </a>
                                <p class="product-price"><span class="old-price">$75.000</span> $55.000</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="Producto.php" class="btn DAMALÚ-btn">Ver mas...</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <img src="images/Caño.jpg" alt="">
                                <!-- Hover Thumb -->
                                <img class="hover-img" src="images/12.jpg" alt="">

                                <!-- Product Badge -->
                                <div class="product-badge new-badge">
                                    <span>Nuevo</span>
                                </div>

                                <!-- Favourite -->
                                <div class="product-favourite">
                                    <a href="#" class="favme fa fa-heart"></a>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <a href="Producto.php">
                                    <h6>Caminata por Cartagena</h6>
                                </a>
                                <p class="product-price">$80.000</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="Producto.php" class="btn DAMALÚ-btn">Ver mas...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### New Arrivals Area End ##### -->

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

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Plugins js -->
    <script src="js/pluginss.js"></script>
    <!-- Active js -->
    <script src="js/Activar.js"></script>

</body>

</html>
 