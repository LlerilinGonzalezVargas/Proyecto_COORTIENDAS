<?php
class Promociones{

  //Atributos
  public $idPromociones;

  //Metodos

  public function Promociones($idPromociones){
    $this->idPromociones=$idPromociones; 
  }

  public function Get_idPromociones(){
    return $this->idPromociones;
  }
}
?>