<?php
class Cliente{

  //Atributos
public $Id_Clie ;
public $EstadoUsu_Id_est_usu ;
public $Name_usu ;
public $Email_usu ;
private $Pass_usu ;


/* ---------------Metodos set-------------------*/

public function Cliente($Id_Clie){
  $this->Id_Clie=$Id_Clie;
}

public function Set_EstadoUsu_Id_est_usu($EstadoUsu_Id_est_usu){
  $this->EstadoUsu_Id_est_usu=$EstadoUsu_Id_est_usu;
}

public function Set_Name_usu($Name_usu){
  $this->Name_usu=$Name_usu;
}

public function Set_Email_usu($Email_usu){
  $this->Email_usu=$Email_usu;
}

public function Set_Pass_usu($Pass_usu){
  $this->Pass_usu=$Pass_usu;
}
/* -----------------Metodos Get -------------------- */

public function Get_Id_Clie(){
  return $this->Id_Clie;
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



}
?>