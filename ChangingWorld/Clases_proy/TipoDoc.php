<?php
class TipoDoc{

  //Atributos
  public $Id_tip_doc;
  public $Nam_tip_doc;

  //Metodos

  public function TipoDoc($Id_tip_doc){
    $this->Id_tip_doc=$Id_tip_doc;
   
  }
  public function Set_Nam_tip_doc($Nam_tip_doc){
    $this->Nam_tip_doc=$Nam_tip_doc;
  }
  public function Get_Id_tip_doc(){
    return $this->Id_tip_doc;
  }
  public function Get_Nam_tip_doc(){
    return $this->Nam_tip_doc;
  }


}
?>