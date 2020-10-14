<?php
/* session_start(); */
  require "../Modelo/ConexionDataBase.php";
  require "../Modelo/EstadoProd.php";
  require "../Modelo/Proveedor.php";
  require "../Modelo/TipProd.php";
 
  /* session_start(); */
  if(!isset($_SESSION['Cliente']) ||!isset($_SESSION['Empleado']) )
  {
   
    /* header('location: index.php'); */
  }elseif (isset($_SESSION['Cliente'])) {
    header('location: index.php');

  }elseif ($_SESSION['Cargo']=='1') {//supervisor
    $objemp= new Empleados();
    $res_emp= $objemp->Consultar_Empleado($_SESSION['Empleado ']);
    $sql="select * from producto ;";
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
            <h1 class="ftco-heading mb-3" data-aos="fade-up" data-aos-delay="500" style="color: white;">Nuevo Producto</h1>
           
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
                        <h5 style="text-align: center;">Nuevo Producto</h5>
        <form action="../Modelo/validacion/NuevoProducto.php" method="post" enctype="multipart/form-data"> >
        <div class="" style="text-align: center;">
      

           <div class="col-12 col-md-6">
            <div class="group">
                <input type="number" name="ID" id="ID"  required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Id Producto</label>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="group">
            <select name="tipo_prod" id="tipo_prod" required>
            <option value="">Tipo de Producto</option>
            <?php
              $objTipo= new TipProd();
              $res=$objTipo->Consultar_TipProds();
                  while ($TipProd =$res->fetch_object()) {
                    echo '<option value="' . $TipProd->Id_tip_prod . '">' . $TipProd->Nam_tip_prod .  '</option>';
                  }
              ?>
            </select>

                <span class="highlight"></span>
                <span class="bar"></span>
                
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="group">
            <select name="Provee" id="Provee" required>
            <option value="">Proveedor</option>
            <?php
            /* $Conexion=Conectarse();  
            $sql_b="select Id_prov,Empre_prov,Est_prov,Nam_prov,Cel_prov,Tel_prov,Cedu_prov,Dir_prov,Notas_prov from proveedor where Est_prov='1';";
            $res_a=$Conexion->query($sql_b); */
            
              $objprov= new Proveedor();
              $res_a=$objprov->Consultar_Proveedor();
                  while ($prov=$res_a->fetch_object()) {
                    echo '<option value="' . $prov->Id_prov . '">' . $prov->Nam_prov .  '</option>';
                  } 
              ?>
            </select>

                <span class="highlight"></span>
                <span class="bar"></span>
                
            </div>
        </div> 
        <div class="col-12 col-md-6">
            <div class="group">
                <input type="text" name="name" id="name" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Nombre de producto</label>
            </div>
        </div>
        <div class="col-12">
              <div class="group">
                  <textarea name="caracter" id="caracter" size="120" required></textarea>
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label>Caracteriticas</label>
              </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="group">
                <input type="number" name="valor" id="valor" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Valor Unitario $</label>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="group">
                <input type="number" name="iva" id="iva" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>IVA %</label>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="group">
                <input type="number" name="presen" id="presen" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Presentación en unidades</label>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="group">
                <input type="TEXT" name="tam" id="tam" required>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Tamaño </label>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="group">
                <input type="file" name="img" id="img" multiple>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label></label>
            </div>
        </div>
        
            <div class="col-12">
                                    <input  type="submit" id="Enviar"class="mosh-btn original-btn" value="Enviar" name="Enviar">
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