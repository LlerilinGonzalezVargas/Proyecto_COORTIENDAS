<!DOCTYPE html>
<html>
  <head>
    <title>Registro</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/Mod.css">
    <link rel="icon" href="images/Faviconn.png">
    
  </head>
  <body >

 

    <div class="login-box">
      <img src="img/logo.png" class="avatar" alt="Avatar Image">
      <h1>Registro </h1>
      <form action="registrar.php" method="POST" accept-charset="utf-8">

        <label for="username">Usuario</label>
        <input type="text" placeholder="Ingrese usuario" id="nombre" name="nombre" required>
     
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Ingrese contraseña"  id="passw" name="passw" required>

         <label for="password"> Confirme su contraseña</label>
        <input type="password" placeholder="Ingrese de nuevo su contraseña" id="password" name="password" required> 

        <label for="correo">Correo</label>

        <input type="email" placeholder="Ingrese su correo" id="email" name="email" required=>

<select name="tarjeta" id="tarjeta" required >
  <option value="Cedula de ciudadania">Cedula de ciudadania</option>​
  <option value="Cedula de Extranjeria">Cedula de Extranjeria</option>​
  <option value="Tarjeta de identidad">Tarjeta de identidad</option>
</select>
  <br>
<br>


        <label for="num">Número de identificación</label>
       
        <input type="text" placeholder="Ingrese número de identificación" id="num" name="num" required>

     
       
        <input type="submit" value="Registrarse">
 


      </form>
    </div>
  </body>
</html>
