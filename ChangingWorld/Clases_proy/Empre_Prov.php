<?php
class Empre_Prov{
  public $ID_emp_prov;
  public $Nam_emp_prov;

  public function Empre_Prov($ID_emp_prov){

    $this->ID_emp_prov=$ID_emp_prov;

  }
  //Metodos Set
  Public Function Set_Name_est_prod($Nam_emp_prov){
    $this->Nam_emp_prov=$Nam_emp_prov;
  }
  //Metodo Get
  Public function Get_ID_emp_prov(){
    return $this->ID_emp_prov;
  }
  Public function Get_Nam_emp_prov(){
    return $this->Nam_emp_prov;
  }
}
?>