<?php
class TipProd{

  //Atributos
  public $Id_tip_prod;
  public $Name_tip_prod;

  //Metodos

  public function TipProd($Id_tip_prod){//sinonimo de la clave principal
    $this->Id_tip_prod=$Id_tip_prod;
   
  }
  public function Set_Name_tip_prod($Name_tip_prod){
    $this->Name_tip_prod=$Name_tip_prod;
  }
  public function Get_Id_tip_prod(){
    return $this->Id_tip_prod;
  }
  public function Get_Name_tip_prod(){
    return $this->Name_tip_prod;
  }

/*------------------- Metodos de consulta-------------------- */
public function Crear_Empre_Prov(,$Id_emp  ,$EstadoUsu_Id_est_usu  ,$Solicitud_empleado_idSolicitud  ,$Name_emp  ,$Email_emp  ,$Pass_emp  ,$Img_emp  ,$Id_supvisor  ,$Obser_emp  ,$Edad_emp  ){
  $this->Id_emp=$Id_emp;
$this->EstadoUsu_Id_est_usu=$EstadoUsu_Id_est_usu;
$this->Solicitud_empleado_idSolicitud=$Solicitud_empleado_idSolicitud;
$this->Name_emp=$Name_emp;
$this->Email_emp=$Email_emp;
$this->Pass_emp=$Pass_emp;
$this->Img_emp=$Img_emp;
$this->Id_supvisor=$Id_supvisor;
$this->Obser_emp=$Obser_emp;
$this->Edad_emp=$Edad_emp;
}
public function Agregar_Empre_Prov(){

}
Public function Actualizar_Empre_Prov($Id_emp){

} 
Public function Consultar_Empre_Prov($Id_emp){

}
}
?>