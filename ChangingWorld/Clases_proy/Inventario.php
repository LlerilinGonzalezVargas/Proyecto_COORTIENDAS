<?php
class Inventario{

  //Atributos
  public $Entradas_2;
  public $Producto_Id_prod;
  public $Producto_TipProd_Id_tip_prod;
  public $Producto_EstadoProd_Id_est_prod;
  public $Entr_inv;
  public $Sal_inv;
  public $Saldo_inv;
  public $Neto_val;
  public $Total_val;
  public $IVA;

  //Metodos

  public function Inventario($Entradas_2){
    $this->Entradas_2=$Entradas_2; 
  }
  public function Set_Producto_Id_prod($Producto_Id_prod){
    $this->Producto_Id_prod=$Producto_Id_prod;
  }
  public function Set_Producto_TipProd_Id_tip_prod($Producto_TipProd_Id_tip_prod){
    $this->Producto_TipProd_Id_tip_prod=$Producto_TipProd_Id_tip_prod;
  }
  public function Set_Producto_EstadoProd_Id_est_prod($Producto_EstadoProd_Id_est_prod){
    $this->Producto_EstadoProd_Id_est_prod=$Producto_EstadoProd_Id_est_prod;
  }
  public function Set_Entr_inv($Entr_inv){
    $this->Entr_inv=$Entr_inv;
  }
  public function Set_Sal_inv($Sal_inv){
    $this->Sal_inv=$Sal_inv;
  }
  public function Set_Saldo_inv($Saldo_inv){
    $this->Saldo_inv=$Saldo_inv;
  }


  public function Get_Entradas_2(){
    return $this->Entradas_2;
  }
  public function Get_Producto_Id_prod(){
    return $this->Producto_Id_prod;
  }
  public function Get_Producto_TipProd_Id_tip_prod(){
    return $this->Producto_TipProd_Id_tip_prod;
  }
  public function Get_Producto_EstadoProd_Id_est_prod(){
    return $this->Producto_EstadoProd_Id_est_prod;
  }
  public function Get_Entr_inv(){
    return $this->Entr_inv;
  }
  public function Get_Saldo_inv(){
    return $this->Saldo_inv;
  }
  public function Get_Neto_val(){
    return $this->Neto_val;
  }
}
?>