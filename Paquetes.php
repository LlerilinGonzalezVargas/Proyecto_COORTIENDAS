<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title  -->
    <title>Paquetes &amp; Turismo</title>

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
          <span class="oi oi-menu"></span> MenúX
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
                               <div class="login-register-btn" style="margin: 0 10px" >
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
                                <br>
                                <li class="nav-item"><a href="cerrar_session.php" class="nav-link" >Cerrar sesión</a></li>
                    
                    
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="ftco-cover" style="background-image: url(images/PE.jpg);" id="section-home" data-aos="fade"  data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center ftco-vh-100">
          <div class="col-md-7">
            <h1 class="ftco-heading mb-3" data-aos="fade-up" data-aos-delay="500">Paquetes &amp; Turismo </h1>
            <h2 class="h5 ftco-subheading mb-5" data-aos="fade-up"  data-aos-delay="600"></h2>
          </div>
        </div>
      </div>
    </section>



    <!-- ##### Top Catagory Area Start ##### -->
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

         </div>
  </div>
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
                                <a href="#" class="btn DAMALÚ-btn">Compra ahora</a>
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

       

<section class="new_arrivals_area ">
                    

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
                                <a href="single-product-details.html">
                                    <h6>Caminata en Santa Marta</h6>
                                </a>
                                <p class="product-price">$80.000</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn DAMALÚ-btn">Añadir al carrito</a>
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
                                <a href="single-product-details.html">
                                    <h6>Vuelo</h6>
                                </a>
                                <p class="product-price">$300.000</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn DAMALÚ-btn">Add to Cart</a>
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
                                <a href="single-product-details.html">
                                    <h6>Estadia en Medellin</h6>
                                </a>
                                <p class="product-price"><span class="old-price">$75.000</span> $55.000</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn DAMALÚ-btn">Añadir al carrito</a>
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
                                <span>mango</span>
                                <a href="single-product-details.html">
                                    <h6>PETITE Belted Jumper Dress</h6>
                                </a>
                                <p class="product-price">$80.00</p>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="#" class="btn DAMALÚ-btn">Añadir al carrito</a>
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

<div class="ftco-section">
    <div class="container">
      <div class="block-3 d-md-flex" data-aos="fade-left">
        <div class="image" style="background-image: url('images/image_5.jpg'); "></div>
        <div class="text">
          <h4 class="subheading">Vuelo increible a San Andres:</h4>
          <h2 class="heading">Sorprendete!!</h2>
          <p>El archipiélago de San Andrés, Providencia y Santa Catalina es un departamento colombiano situado en el medio del mar Caribe, a 775 Km del Nord-este de la costa. La capital de este departamento es San Andrés. Este conjunto está considerado como un lugar paradisiaco que posee las más bellas playas de Colombia e incluso del Caribe</p>
        </div>
      </div>
      <div class="block-3 d-md-flex" data-aos="fade-right">
        <div class="image order-2" style="background-image: url('images/image_6.jpg'); "></div>
        <div class="text order-1">
          <h4 class="subheading">Vuelo increible con  EcoTour a Santa Marta</h4>
          <h2 class="heading">Sueña</h2>
          <p>Santa Marta es sabrosa; es una ciudad donde la diversidad está presente en su territorio, en su gente y en cada aspecto cultural que la compone, es un destino que acoge a todos sus visitantes y los hace sentir como en casa. </p>
        </div>
      </div>
      <div class="block-3 d-md-flex" data-aos="fade-left">
        <div class="image" style="background-image: url('images/1.jpg'); "></div>
        <div class="text">
          <h4 class="subheading">Cartagena incrible lugar para darte una vuelta :)
          ¿''''</h4>
          <h2 class="heading">MEJORA!!</h2>
          <p>Mágica ciudad levantada a orillas del Caribe, rodeada de imponentes murallas y fortificaciones que alguna vez la protegieron de ataques de piratas y corsarios. Declarada hoy Patrimonio de la Humanidad por la Unesco, maravilla por la preservación de su identidad colonial, con calles adoquinadas por donde el tiempo pareciera no haber transcurrido, entre plazoletas una más bella que otra y coloridas arquitecturas.  </p>
        </div>
      </div>
    </div>
  </div>
</div></section>
  <!-- ***** CTA Area Start ***** -->
    <section class="mosh-call-to-action-area bg-img bg-overlays section_padding_100" style="background-image: url(images/cta.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content text-center wow fadeIn" data-wow-delay="0.5s">
                        <div class="section-heading">
                            <p>DAMALÚ ;)</p>
                            <h2>¿Alguna duda?</h2>
                            <a href="contact.html" class="btn mosh-btn">Contactanos</a>
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