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
        <td><input type="text" name="Nam_clie" required="" placeholder="Nombre Completo"></td>
      </div>  

      <div class="input-contenedor">
        <td><i class="fa fa-envelope" aria-hidden="true icon"></i></td>
        <td><input type="text" name="email_clie" required="" placeholder="Correo Electronico"></td>
      </div>

      <div class="input-contenedor">
        <i class="fa fa-key" aria-hidden="true icon"></i>
        <td><input type="password" name="Pass_clie" required="" placeholder="Contraseña"></td>
      </div>
      
      <input type="submit" name="submit" value="Registrarse" class="button">
    </div>
  </form>

    <?php
    if (isset($_POST['submit'])) {
      require ("index.php");
    }
    ?>
<br>
<br>
    <p>¿Ya tienes cuenta? <a class="link" href="loginc.php">Inicia sesion</a></p>
  </div>
</body>
</html>