<?php
session_start();
  require "../Modelo/ConexionDataBase.php";
  require "../Modelo/Cliente.php";
  require "../Modelo/Empleados.php";
  require "../Modelo/EstadoUsu.php";
  require "../Modelo/Solicitud_empleado.php";
  require "../Modelo/TipUsu.php";
  require "../Modelo/TipoDoc.php";
  /* session_start(); */
  if(!isset($_SESSION['Cliente']) ||!isset($_SESSION['Empleado']) )
  {
   
    /* header('location: index.php'); */
  }elseif (isset($_SESSION['Cliente'])) {
    
    $objClie= new Cliente();
   $res_clie= $objClie->ConsultarCliente($_SESSION['Cliente']);
   


  }elseif (isset($_SESSION['Empleado'])) {
    $objemp= new Empleados();
    $res_emp= $objemp->Consultar_Empleado($_SESSION['Empleado ']);
    $sql="select * from solic_emp where doc_usu='$_SESSION[Empleado]';";
    $conexion=Conectarse();
    $res_sol=$conexion->query($sql);
    
  }

  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>COORTIENDAS</title>
    <meta charset="utf-8">
    <link rel="icon" href="../images\Faviconn.png">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <!-- <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css"> -->
    <link rel="stylesheet" href="../css/animate.css">
    
    <!-- <link rel="stylesheet" href="../css/flaticon.css"> -->
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" data-aos="fade-down" data-aos-delay="500">
      <div class="container">
        <a class="navbar-brand" href="index.html"><img style="width: 50%;" src="../images/Logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menú
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="contacto.html" class="nav-link">Contáctenos</a></li>
            <li class="nav-item"><a href="index.html" class="nav-link">Productos</a></li>
          </ul>
          <!-- Search Form Area Start -->
                                
                    
        </div>
      </div>
    </nav>
    
     

    <section class="ftco-cover" style="background-image: url(../images/Foto.jpg);" style="width: 10%; height: 10%;" id="section-home" data-aos="fade"  data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center ftco-vh-75" >
          <div class="col-md-7">
            <h1 class="ftco-heading mb-3" data-aos="fade-up" data-aos-delay="500" style="color: white;">Actualizar Cuenta</h1>
           
          </div>
        </div>
      </div>
    </section>
    
    
 <div class="ftco-section contact-section" style="background: #E1EAEA;;">
    <div class="container"><!--style.css:8330,460,453,10266,34-->
      <div class="">
        <div class="">
          <!--formulario-->
          <div class="col-md-9 col-md-9" >
                    <div class="contact-form">
                        <h5 style="text-align: center;">Actualizar Cuenta</h5>
        <form action="../Modelo/validacion/ActualizarUsu.php" method="post" >
        <div class="" style="text-align: center;">
        <?php
        if (isset($_SESSION['Cliente'])) {
          while ($clie=$res_clie->fetch_object()) {
            echo ' <div class="col-12 col-md-6">
            <div class="group">
                <input type="text" name="Name" id="Name" value="' . $clie->Nam_clie. '" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Nombre Completo</label>
            </div>
        </div>
          <div class="col-12 col-md-6">
            <div class="group">
                <input type="email" name="email" id="email" value="' . $clie->email_clie. '" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Email</label>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="group">
                <input type="password" name="Pass_1" id="Pass_1" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Contraseña anterior</label>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="group">
                <input type="password" name="Pass_2" id="Pass_2" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Contraseña nueva</label>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="group">
                <input type="password" name="Pass_3" id="Pass_3" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Confirmación de contraseña</label>
            </div>
        </div>
         ';
          }
        }elseif (isset($_SESSION['Empleado'])) {
          while ($emp=$res_emp->fetch_object()) {
            echo ' <div class="col-12 col-md-6">
            <div class="group">
                <input type="text" name="Name" id="Name" value="' . $emp->Nam_empl. '" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Nombre Completo</label>
            </div>
        </div>
          <div class="col-12 col-md-6">
            <div class="group">
                <input type="email" name="email" id="email" value="' . $emp->Email_empl. '" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Email</label>
            </div>
        </div>';

        
        echo'
        <div class="col-12 col-md-6">
            <div class="group">
                <input type="file" name="img" id="img" value="' . $emp->img_eml. '"required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Imágen</label>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="group">
                <input type="password" name="Pass_1" id="Pass_1" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Contraseña anterior</label>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="group">
                <input type="password" name="Pass_2" id="Pass_2" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Contraseña nueva</label>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="group">
                <input type="password" name="Pass_3" id="Pass_3" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Confirmación de contraseña</label>
            </div>
        </div>
        ';
          }
        }
        ?>                    
        
                                 <!--  <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="Name" id="Name" value="aaa" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Nombre Completo</label>
                                    </div>
                                </div>
                                  <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="email" id="email" value="aaa" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Email</label>
                                    </div>
                                </div> -->
                                 
                                  
                                <div class="col-12">
                                    <input  type="submit" class="mosh-btn original-btn" value="Continuar">
                                </div>
                                
                        </form></div></div>
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
                <h2 class="ftco-heading-2">Acerca de Coortiendas</h2>
                <ul class="list-unstyled">
                  <li><a href="Sobre.html" class="py-2 d-block">¿Quiénes somos?</a></li>
                  <li><a href="#" class="py-2 d-block">Contactenos</a></li>
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
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>


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