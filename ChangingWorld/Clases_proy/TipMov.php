<?php
class TipMov{
  public $Id_tip_mov;
  public $Name_tip_mov;

  public function TipMov($Id_est_mov){

    $this->Id_tip_mov=$Id_tip_mov;

  }
  //Metodos Set
  Public Function Set_Name_est_prod($Name_tip_mov){
    $this->Name_tip_mov=$Name_tip_mov;
  }
  //Metodo Get
  Public function Get_Id_tip_mov(){
    return $this->Id_tip_mov;
  }
  Public function Get_Name_tip_mov(){
    return $this->Name_tip_mov;
  }
}
?>