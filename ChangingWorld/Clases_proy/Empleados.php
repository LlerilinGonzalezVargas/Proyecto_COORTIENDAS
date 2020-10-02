<?php
class Empleados{

  //Atributos
public $Id_emp;
public $EstadoUsu_Id_est_usu;
public $Solicitud_empleado_idSolicitud;
public $Name_emp ;
public $Email_emp ;
private $Pass_emp ;
public $Img_emp;
public $Id_supvisor;
public $Obser_emp;
public $Edad_emp;


/* ---------------Metodos set-------------------*/

public function Empleados($Id_Clie){
  $this->Id_Clie=$Id_emp;
}

public function Set_EstadoUsu_Id_est_usu($EstadoUsu_Id_est_usu){
  $this->EstadoUsu_Id_est_usu=$EstadoUsu_Id_est_usu;
}

public function Set_Solicitud_empleado_idSolicitud($Solicitud_empleado_idSolicitud){
  $this->Solicitud_empleado_idSolicitud=$Solicitud_empleado_idSolicitud;
}

public function Set_Name_emp($Name_emp){
  $this->Name_emp=$Name_emp;
}

public function Set_Email_emp($Email_emp){
  $this->Email_emp=$Email_emp;
}

public function Set_Pass_emp($Pass_emp){
  $this->Pass_emp=$Pass_emp;
}

public function Set_Img_emp($Img_emp){
  $this->Img_emp=$Img_emp;
}

public function Set_Id_supvisor($Id_supvisor){
  $this->Id_supvisor=$Id_supvisor;
}

public function Set_Obser_emp($Obser_emp){
  $this->Obser_emp=$Obser_emp;
}

public function Set_Edad_emp($Edad_emp){
  $this->Edad_emp=$Edad_emp;
}
/* -----------------Metodos Get -------------------- */

public function Get_Id_Clie(){
  return $this->Id_emp;
}
public function Get_EstadoUsu_Id_est_usu(){
  return $this->EstadoUsu_Id_est_usu;
}
public function Get_Name_usu(){
  return $this->Name_usu;
}
public function Get_Email_usu(){
  return $this->Email_usu;
}
public function Get_Pass_usu(){
  return $this->Pass_usu;
}
public function Get_Img_emp(){
  return $this->Img_emp;
}
public function Get_Id_supvisor(){
  return $this->Id_supvisor;
}
public function Get_Obser_emp(){
  return $this->Obser_emp;
}
public function Get_Edad_emp(){
  return $this->Edad_emp;
}

}
?>