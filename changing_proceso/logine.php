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
  
    
<br>
<form action="loguear.php" method="POST" class="formulario">
		<h1>Iniciar sesión</h1>
		<div class="heead">
			  <section class="segundo">
        <div id="opcioon">
          <ul class="op">
            <li class="ipp">Rol ▼  </a>
              <ul>
                <li><a href="loginc.php">Cliente</a></li>
                <li><a href="logine.php">Empleado</a></li>
              </ul>
            </li>
          </ul>
      </section>
				
				<div class="input-contenedor">
				<td><i class="fa fa-envelope" aria-hidden="true icon"></i></td>
				<td><input type="text" name="correo" placeholder="Correo electronico" required=""></td>
				</div>

        <div class="input-contenedor">
        <td><i class="fa fa-user" aria-hidden="true icon"></i></td>
        <td><input type="text" name="cc_empl" placeholder="Número de identificación" required=""></td>
        </div>

				<div class="input-contenedor">
				<td><i class="fa fa-key" aria-hidden="true icon"></i></td>
				<input type="password" name="pass" placeholder="Contraseña" required="">
				</div>


		
				<button type="submit" class="button">Iniciar sesión</button>	   
			</form>
			<br><br><br>
						 <p>¿No tienes cuenta?, <a class="link" href="registroc.php">Registrate</a></p>
		</div>

</body>
</html>

