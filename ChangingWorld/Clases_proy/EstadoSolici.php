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


}
?>