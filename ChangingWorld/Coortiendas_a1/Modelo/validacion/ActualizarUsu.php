<?php

require "../Modelo/ConexionDataBase.php";
require "../Modelo/Cliente.php";
require "../Modelo/Empleados.php";
require "../Modelo/EstadoUsu.php";
require "../Modelo/Solicitud_empleado.php";
require "../Modelo/TipUsu.php";
require "../Modelo/TipoDoc.php";
if (isset($_REQUEST['Registrarse'])) {
  session_start();
  extract($_REQUEST);
  
  if ($_REQUEST['Pass_3']==$_REQUEST['Pass_2']) {
   
    if (isset($_SESSION['Cliente'])) {
      $sql="select * from est_usu,cliente where (est_usu.Id_est_usu=cliente.Est_clie) and Id_clie='$_SESSION['Cliente']';";
      $resultado=$conectarse->query($sql);
      while ($Clie=$resultado->fetch_array() ) {
            
        if (password_verify($_REQUEST['Pass_1'], $Clie['Pass_clie'] )) {

          $pass=password_hash($_REQUEST['Pass_2'], PASSWORD_DEFAULT,['cost' => 10]);ç

          $objClie= new Cliente();
          $objClie->Crear_Cliente($_REQUEST['Name'],$_REQUEST['email'],$pass);
          $objClie->Actualizar_Cliente($_SESSION['Cliente']);
          echo "<script type='text/javascript'>alert('Se ha actualizado su usuario, gracias.');
          window.location='../../Vista/index.php';
           </script>
           ";
        }else {
          echo "<script type='text/javascript'>alert('La contraseña es no es la almacenada, intente nuevamente.');
         window.location='../../Vista/frmActualizarUsu.php';
          </script>
          ";
        }
      }


      
      
    
    
    }elseif (isset($_SESSION['Empleado'])) {
      
      $sql="select * from empleados,solic_emp where ID_empl='$_SESSION[Empleado]' and (empleados.Sol_empl=solic_emp.Id_sol_emp) ;";
      $resultado=$conectarse->query($sql);
      while ($emp=$resultado->fetch_array() ) {
            
        if (password_verify($_REQUEST['Pass_1'], $emp['Pass_emp'] )) {

          $pass=password_hash($_REQUEST['Pass_2'], PASSWORD_DEFAULT,['cost' => 10]);

          $objemp= new Empleados();
          $objemp->
          $objemp->Crear_mismoEmpleado($_REQUEST['Name'],$_REQUEST['email'],$pass,$_REQUEST['img'],$edad);
          $objemp->Actualizar_MismoEmpleado($_SESSION['Empleado']);
          echo "<script type='text/javascript'>alert('Se ha actualizado su usuario, gracias.');
          window.location='../../Vista/index.php';
           </script>
           ";
        }else {
          echo "<script type='text/javascript'>alert('La contraseña es no es la almacenada, intente nuevamente.');
         window.location='../../Vista/frmActualizarUsu.php';
          </script>
          ";
        }
      $objemp= new Empleados();
      $res_emp= $objemp->Consultar_Empleado($_SESSION['Empleado ']);
      $sql="select * from solic_emp where doc_usu='$_SESSION['Empleado']';";
      $conexion=Conectarse();
      $res_sol=$conexion->query($sql);
      
    }
  }
  
}else {
  echo "<script type='text/javascript'>alert('Las contraseñas no coinciden, intente nuevamente');
    window.location='../../Vista/frmActualizarUsu.php';
    </script>
    ";
}
}
?>