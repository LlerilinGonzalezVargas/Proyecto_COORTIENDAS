<?php
class TipUsu{

  //Atributos
  public $Id_tip_usu;
  public $Nam_tip_usu;

  //Metodos

  public function TipUsu($Id_tip_usu){
    $this->Id_tip_usu=$Id_tip_usu;
   
  }
  public function Set_Nam_tip_usu($Nam_tip_usu){
    $this->Nam_tip_usu=$Nam_tip_usu;
  }
  public function Get_Id_tip_usu(){
    return $this->Id_tip_usu;
  }
  public function Get_Nam_tip_usu(){
    return $this->Nam_tip_usu;
  }


}
?>