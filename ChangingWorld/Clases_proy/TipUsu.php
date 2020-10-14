<?php
class TipUsu{

  //Atributos
  public $Id_tip_usu;
  public $Nam_tip_usu;

  //Metodos

  public function TipUsu($Id_tip_usu){
    $this->Id_tip_usu=$Id_tip_usu;
   
  }
  public function Set_Nam_tip_usu($Nam_tip_usu){
    $this->Nam_tip_usu=$Nam_tip_usu;
  }
  public function Get_Id_tip_usu(){
    return $this->Id_tip_usu;
  }
  public function Get_Nam_tip_usu(){
    return $this->Nam_tip_usu;
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