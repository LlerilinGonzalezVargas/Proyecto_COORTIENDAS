<?php
class EstadoUsu{
  public $Id_est_usu;
  public $Name_est;

  public function EstadoUsu($Id_est_usu){

    $this->Id_est_usu=$Id_est_usu;

  }
  //Metodos Set
  Public Function Set_Name_est($Name_est){
    $this->Name_est=$Name_est;
  }
  //Metodo Get
  Public function Get_Id_est_usu(){
    return $this->Id_est_usu;
  }
  Public function Get_Name_est(){
    return $this->Name_est;
  }
  /*------------------- Metodos de consulta-------------------- */
  public function Crear_EstadoUsu($Id_est_usu  ,$Name_est ){
    $this->Id_est_usu=$Id_est_usu;
    $this->Name_est=$Name_est;
  
  }
  public function Agregar_EstadoUsu(){
  
  }
  Public function Actualizar_EstadoUsu($Id_est_usu){
  
  } 
  Public function Consultar_EstadoUsu(){
  
  }
}
?>