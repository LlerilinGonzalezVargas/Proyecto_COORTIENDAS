<?php
class EstadoProv{
  public $Id_est_prov;
  public $name_est_prov;

  public function EstadoProv($Id_est_prov){

    $this->Id_est_prov=$Id_est_prov;

  }
  //Metodos Set
  Public Function Set_Name_est_prod($name_est_prov){
    $this->name_est_prov=$name_est_prov;
  }
  //Metodo Get
  Public function Get_Id_est_prov(){
    return $this->Id_est_prov;
  }
  Public function Get_Name_est_prov(){
    return $this->name_est_prov;
  }
  /*------------------- Metodos de consulta-------------------- */
  public function Crear_EstadoProv($Id_est_prov  ,$name_est_prov){
    $this->Id_est_prov=$Id_est_prov;
  $this->name_est_prov=$name_est_prov;
 
  }
  public function Agregar_EstadoProv(){
  
  }
  Public function Actualizar_EstadoProv($Id_est_prov){
  
  } 
  Public function Consultar_EstadoProv(){
  
  }
}
?>