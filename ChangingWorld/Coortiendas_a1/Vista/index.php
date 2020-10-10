<?php
require "../ConexionDataBase.php";
require "../Modelo/Producto.php";
$objProd= new Producto(); 
$ret_Tot=$objProd->Consultar_Producto();
$sql_t="select * from tip_prod";

$conectarse=Conectarse();
$Tip_prod_res=$conectarse->query($sql_t);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Productos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="icon" href="../images/F.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">
    <link href="css/responsive-color.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/ionicons.min.css">
    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../Estilo.css">
    <!-- <link rel="stylesheet" href="css/animateda.css"> -->
  </head>
  
  <body>
    <header class="header">
      <div class="wrapper">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" data-aos="fade-down" data-aos-delay="500">
      <div class="container">
        <a class="navbar-brand" href="index.html"><img style="width: 50%;" src="../images/Logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menú
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item" ><a href="contacto.php" class="nav-link">Contáctenos</a></li>
            <li class="nav-item"><a href="index.html" class="nav-link"><strong style="color: green;"> Productos </strong></a></li>
          </ul>
          <!-- Search Form Area Start -->
          <?php
          if (!isset($_SESSION['Cliente']||!isset($_SESSION['Empleado'])) {
            
            echo'
            <div class="login-register-btn" >
                                    <a href="php/IniciarSesion.php"><font style="vertical-align: inherit; font-size: 15px;"><font style="vertical-align: inherit;">Iniciar Sesion</font></font></a><br>
                                    <a href="php/Registro.php"><font style="vertical-align: inherit; font-size: 12px;"><font style="vertical-align: inherit;">Registrarse</font></font></a>
                                </div>
            ';
          }
          ?>
                               
                    
        </div>
      </div>
    </nav></div></header>
    <!-- END nav -->

   <!--  <section class="ftco-cover" style="background-image: url(images/Comida.jpeg);" id="section-home" data-aos="fade"  data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center ftco-vh-100">
          <div class="col-md-7">
            <h1 class="ftco-heading mb-3" data-aos="fade-up" data-aos-delay="500">Productos</h1>
            <h2 class="h5 ftco-subheading mb-5" data-aos="fade-up"  data-aos-delay="600"></h2>
          </div>
        </div>
      </div>
    </section> -->
    <section class="contenido wrapper">
      <div class="slider">
         <ul>
           <li><a href="#"><img src="../Imagenes/slider.jpg" alt=""></a></li>
           <li><a href="#"><img src="../Imagenes/slider1.jpg" alt=""></a></li>
           <li><a href="#"><img src="../Imagenes/slider2.jpg" alt=""></a></li>
           <li><a href="#"><img src="../Imagenes/slider3.jpg" alt=""></a></li><li>
           <li><a href="#"><img src="../Imagenes/slider.jpg" alt=""></a></li>
         </ul>
       </div>
     </section>
    <!-- END section -->

<section class="mosh-team-area section_padding_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="section-heading text-center">
                        <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tipos de productos a la venta</font></font></h2>
                    </div>
                </div>
            </div>
              <div class="row">
                <div class="col-12">
                    <div class="mosh-team-slides owl-carousel">
                        <!-- Single Team Slide -->
<?php
while ($tp_prod=$Tip_prod_res->fetch_array()) {
      $sql_p="select * from producto where Tip_prod='$tp_prod->Id_tip_prod' and Est_prod='1'";
    $img_prod_res=$conectarse->query($sql_p);
  while ($img_prod=$img_prod_res->fetch_object()) {
    
  }
  echo '<div class="single-team-slide text-center">
  <!-- Thumbnail -->
  <div class="single-team-slide team-thumbnail">
      <img src="../images/Vinos y Licores.jpg" alt="">//como colocar la img???-------------
  </div>
  <!-- Meta Info -->
  <div class="team-meta-info">
      <h4 value=" ' . $tp_prod->Id_tip_prod . '">' . $tp_prod->Nam_tip_prod . '</h4>
  </div>
  <!-- Social Info -->
  </div>';
}
?>
                        <div class="single-team-slide text-center">
                            <!-- Thumbnail -->
                            <div class="single-team-slide team-thumbnail">
                                <img src="../images/Vinos y Licores.jpg" alt="">
                            </div>
                            <!-- Meta Info -->
                            <div class="team-meta-info">
                                <h4>Vinos y Licores</h4>
                            </div>
                            <!-- Social Info -->
                        </div>


                        <!-- Single Team Slide -->
                        <div class="single-team-slide text-center">
                            <!-- Thumbnail -->
                            <div class="team-thumbnail">
                                <img src="../images/descarga.jpg" alt="">
                            </div>
                            <!-- Meta Info -->
                            <div class="team-meta-info">
                                <h4>Embutidos</h4>
                            </div>
                            <!-- Social Info -->
                        </div>
                        <!-- Single Team Slide -->
                        <div class=" text-center">
                            <!-- Thumbnail -->
                            <div class="team-thumbnail">
                                <img src="../images/Snacks.jpg" alt="">
                            </div>
                            <!-- Meta Info -->
                            <div class="team-meta-info">
                                <h4>Snacks</h4>
                            </div>
                            <!-- Social Info -->
                        </div>
                        
                        <!-- Single Team Slide -->
                        <div class=" text-center">
                            <!-- Thumbnail -->
                            <div class="single-team-slide team-thumbnail">
                                <img src="../images/Panadería y Repostería.jpg" alt="">
                            </div>
                            <!-- Meta Info -->
                            <div class="team-meta-info">
                                <h4>Panderia & Reposteria</h4>
                                <p></p>
                            </div>
                            <!-- Social Info -->
                        </div>
                        <div class=" text-center">
                            <!-- Thumbnail -->
                            <div class="single-team-slide team-thumbnail">
                                <img src="../images/Aseo.jpg" alt="">
                            </div>
                            <!-- Meta Info -->
                            <div class="single-team-slide team-meta-info">
                                <h4>Aseo</h4>
                                <p></p>
                            </div>
                            <!-- Social Info -->
                        </div>
                        <div class="single-team-slide text-center">
                            <!-- Thumbnail -->
                            <div class="team-thumbnail">
                                <img src="../images/Aceite y Mantequilla.jpg" alt="">
                            </div>
                            <!-- Meta Info -->
                            <div class="team-meta-info">
                                <h4>Aceite y Mantequilla</h4>
                                <p></p>
                            </div>
                            <!-- Social Info -->
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
          <h2>Productos</h2>
        </div>
      </div>

<div class="row">
        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a href="Producto.html" class="block-5" style="background-image: url('../images/Pan_Bimbo.jpg');">
            <div class="text">
              <div class="subheading"></div>
              <h3 class="heading">Pan Bimbo blanco 600g $2.100</h3>
              <div class="post-meta">
                <span>Buscamos darte lo mejor</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <a href="Producto.html" class="block-5" style="background-image: url('../images/MegalitroA.jpg');">
            <div class="text">
              <div class="subheading"></div>
              <h3 class="heading">Leche alqueria Entera (Megalitro) $2.500</h3>
              <div class="post-meta">
                <span>La mejor calidad al mejor precio</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <a href="Producto.html" class="block-5" style="background-image: url('../images/Pan_BimboIntegral.jpg');">
            <div class="text">
              <div class="subheading"></div>
              <h3 class="heading">Pan bimbo integral 650g $3.100</h3>
              <div class="post-meta">
                <span>Todo lo que buscas en un solo lugar</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a href="Producto.html" class="block-5" style="background-image: url('../images/bg.jpg');">
            <div class="text">
              <div class="subheading"></div>
              <h3 class="heading">Tienda D1</h3>
              <div class="post-meta">
                <span>Super barato</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a href="Producto.html" class="block-5" style="background-image: url('../images/Merca.jpeg');">
            <div class="text">
              <div class="subheading"></div>
              <h3 class="heading">Tienda El amigo</h3>
              <div class="post-meta">
                <span>Compra ya!!!</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a href="Producto.html" class="block-5" style="background-image: url('../images/Tiendita.jpg');">
            <div class="text">
              <div class="subheading"></div>
              <h3 class="heading">Tienda El paisa</h3>
              <div class="post-meta">
                <span>Todo lo que buscas aqui</span>
              </div>
            </div>
          </a>
        </div>
      </div>


    </div>
  </div>

  <!-- ***** CTA Area Start ***** -->
    <section class="mosh-call-to-action-area bg-img bg-overlays section_padding_100" style="background-image: url(../images/Foto.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content text-center fadeIn" data-wow-delay="0.5s">
                        <div class="section-heading">
                                 <h2>¿Alguna duda?</h2>
                            <button type="submit" class="mosh-btn original-btn">Contactanos</button>
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
                <h2 class="ftco-heading-2">Acerca de Coortiendas</h2>
                <ul class="list-unstyled">
                  <li><a href="Sobre.html" class="py-2 d-block">¿Quiénes somos?</a></li>
                  <li><a href="contacto.html" class="py-2 d-block">Contactenos</a></li>
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
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


 <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap2.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="jquery.immersive-slider.js"></script>

  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="js/jquery.immersive-slider.js"></script>


    <!-- ***** Footer Area End ***** -->

    <!-- jQuery-2.2.4 js -->
    <script src="../js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../js/Motpopper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../js/Onebootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../js/plugins.js"></script>
    <!-- Active js -->
    <script src="../js/active.js"></script>
    
  </body>
</html>