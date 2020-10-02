<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>COORTIENDAS</title>
  <link rel="stylesheet" href="Estilo.css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="Estilojs.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="Imagenes/icono.png" />
</head>

<body>
 <header class="header">
    <div class="wrapper">
      <div class="logo"><a href="principal.html"><img src="Imagenes/LOGO_COORTIENDAS.png" width="200" height="100"></a></div>
      <nav>
        <a href="principal.html">Inicio</a>
        <a href="loginc.php">Iniciar sesión</a>
        <a href="registroc.php">Registrarse</a>
      </nav>
    </div>
  </header>

  <form method="POST" action="" class="formulario">
    <h1>Registro</h1>
    <div class="contenedoorr">
      <section class="segundo">
        <div id="opcioon">
          <ul class="op">
            <li class="ipp">Rol ▼  </a>
              <ul>
                <li><a href="registroc.php">Cliente</a></li>
                <li><a href="registroe.php">Empleado</a></li>
              </ul>
            </li>
          </ul>
      </section>
<br>
      <div class="input-contenedor">
        <td><i class="fa fa-user" aria-hidden="true icon"></i></td>
        <td><input type="text" name="Nam_empl" required="" placeholder="Nombre Completo"></td>
      </div>  

       <div class="input-contenedor">
        <td><i class="fa fa-user" aria-hidden="true icon"></i></td>
        <td><input type="text" name="cc_empl" required="" placeholder="Número de identificación"></td>
      </div>

      <div class="input-contenedor">
        <td><i class="fa fa-envelope" aria-hidden="true icon"></i></td>
        <td><input type="text" name="email_empl" required="" placeholder="Correo Electronico"></td>
      </div>

      <div class="input-contenedor">
        <td><i class="fa fa-key" aria-hidden="true icon"></i></td>
        <td><input type="password" name="Pass_empl" required="" placeholder="Contraseña"></td>
      </div>

      <Center><div class="input-contenedor">
        <h5 style="font-family: 'comfortaa'; font-size: 18px">Img de trabajador</h5><br>
      <input name="Img_empl" id="archivo" type="file" required="" class="button1">
      <input type="submit" name="subir" value="subir archivo" class="button1">
      </div></Center><br>

      <input type="submit" name="submit" value="Registrarse" class="button">

    </div>
  </form>

    <?php
    if (isset($_POST['submit'])) {
      require ("indexe.php");
    }
    ?>
<br>

    <p>¿Ya tienes cuenta? <a class="link" href="loginc.php">Inicia sesion</a></p>
  </div>

  <form action="index.php" method="POST" enctype="multipart/form-data"/>

</form>

<?php
if (isset($_POST['subir'])) {
   $archivo = $_FILES['archivo']['name'];
   if (isset($archivo) && $archivo != "") {
      $tipo = $_FILES['archivo']['type'];
      $tamano = $_FILES['archivo']['size'];
      $temp = $_FILES['archivo']['tmp_name'];
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
        echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
     }
     else {
        if (move_uploaded_file($temp, 'images/'.$archivo)) {
            chmod('images/'.$archivo, 0777);
            echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
            echo '<p><img src="images/'.$archivo.'"></p>';
        }
        else {
           echo '<div><b>Ocurrió algún error al subir el archivo. No pudo guardarse.</b></div>';
        }
      }
   }
}
?>

</body>
</html>