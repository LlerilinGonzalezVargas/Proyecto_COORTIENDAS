<?php
class Solicitud_empleado{

  //Atributos
public $idSolicitud;
public $EstadoSoli_Id_est_sol;
public $TipUsu_Id_tip_usu;
public $TipoDoc_Id_tip_doc ;
public $Sol_emp ;

/* ---------------Metodos set-------------------*/

public function Solicitud_empleado($idSolicitud){
  $this->idSolicitud=$idSolicitud;
}

public function Set_EstadoSoli_Id_est_sol($EstadoSoli_Id_est_sol){
  $this->EstadoSoli_Id_est_sol=$EstadoSoli_Id_est_sol;
}

public function Set_TipUsu_Id_tip_usu($TipUsu_Id_tip_usu){
  $this->TipUsu_Id_tip_usu=$TipUsu_Id_tip_usu;
}

public function Set_TipoDoc_Id_tip_doc($TipoDoc_Id_tip_doc){
  $this->TipoDoc_Id_tip_doc=$TipoDoc_Id_tip_doc;
}

public function Set_Sol_emp($Sol_emp){
  $this->Sol_emp=$Sol_emp;
}

/* -----------------Metodos Get -------------------- */

public function Get_idSolicitud(){
  return $this->idSolicitud;
}
public function Get_EstadoSoli_Id_est_sol(){
  return $this->EstadoSoli_Id_est_sol;
}
public function Get_TipUsu_Id_tip_usu(){
  return $this->TipUsu_Id_tip_usu;
}
public function Get_TipoDoc_Id_tip_doc(){
  return $this->TipoDoc_Id_tip_doc;
}
public function Get_Set_Sol_emp(){
  return $this->Set_Sol_emp;
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