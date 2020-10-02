<?php
class EstadoMovimiento{
  public $Id_est_mov;
  public $Nam_est_mov;

  public function EstadoMovimiento($Id_est_mov){

    $this->Id_est_mov=$Id_est_mov;

  }
  //Metodos Set
  Public Function Set_Name_est_prod($Nam_est_mov){
    $this->Nam_est_mov=$Nam_est_mov;
  }
  //Metodo Get
  Public function Get_Id_est_mov(){
    return $this->Id_est_mov;
  }
  Public function Get_Nam_est_mov(){
    return $this->Nam_est_mov;
  }
}
?>