<?php
class EstadoProd{
  public $Id_est_prod;
  public $Name_est_prod;

  public function EstadoProd($Id_est_prod){

    $this->Id_est_prod=$Id_est_prod;

  }
  //Metodos Set
  Public Function Set_Name_est_prod($Name_est_prod){
    $this->Name_est_prod=$Name_est_prod;
  }
  //Metodo Get
  Public function Get_Id_est_prod(){
    return $this->Id_est_prod;
  }
  Public function Get_Name_est_prod(){
    return $this->Name_est_prod;
  }
}
?>