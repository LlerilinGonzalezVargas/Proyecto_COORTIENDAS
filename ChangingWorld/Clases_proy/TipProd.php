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


}
?>