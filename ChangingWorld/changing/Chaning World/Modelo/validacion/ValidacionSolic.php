<?php
require "../ConexionDataBase.php";
require "../Producto.php";
require "../Empleados.php";
require "../Solicitud_empleado.php";
($_REQUEST);
if (isset($_REQUEST['idSol']) && isset($_REQUEST['cc']) && isset($_REQUEST['accion'])) {
 $objEmpl= new Empleados();
  if ($_REQUEST['accion']=='si') {
    $objSol= new Solicitud_empleado();
    $objSol->aceptar_o_negar_Sol_emp($_REQUEST['idSol'],'1');
    $res_sol=$objSol->Consultar_Sol_emp($_REQUEST['idSol']);
    while ($sol=$res_sol->fetch_object()) {
      $objEmpl->Crear_Empleado($sol->doc_usu,'1',$sol->Email_sol,$sol->Pass_sol,$sol->Sol_emp,$sol->Id_sol_emp);
    }
    $objEmpl->Agregar_Empleado();
    echo "<script type='text/javascript'>alert('Se ha aceptado la solicitud.');
    window.location='../../Vista/ListaSolicitud.php';
    </script>
    ";
  }elseif ($_REQUEST['accion']=='no') {
    $objSol= new Solicitud_empleado();
    $objSol->aceptar_o_negar_Sol_emp($_REQUEST['idSol'],'2');
    echo "<script type='text/javascript'>alert('Se ha denegado la solicitud.');
          window.location='../../Vista/ListaSolicitud.php';
          </script>
          ";
    
  }
  
}
?>