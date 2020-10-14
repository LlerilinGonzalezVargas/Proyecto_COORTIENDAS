<?php
class EstadoSolici{

  //Atributos
  public $Id_est_sol;
  public $Nam_est_sol;

  //Metodos

  public function EstadoSolici($Id_est_sol){
    $this->Id_est_sol=$Id_est_sol;
   
  }
  public function Set_Nam_est_sol($Nam_est_sol){
    $this->Nam_est_sol=$Nam_est_sol;
  }
  public function Get_Id_est_sol(){
    return $this->Id_est_sol;
  }
  public function Get_Nam_est_sol(){
    return $this->Nam_est_sol;
  }
/*------------------- Metodos de consulta-------------------- */
public function Crear_EstadoSolici($Id_est_sol  ,$Nam_est_sol   ){
  
  $this->Id_est_sol=$Id_est_sol;
  $this->Nam_est_sol=$Nam_est_sol;

}
public function Agregar_EstadoSolici(){

}
Public function Actualizar_EstadoSolici($Id_est_sol){

} 
Public function Consultar_EstadoSolici(){

}

}
?>