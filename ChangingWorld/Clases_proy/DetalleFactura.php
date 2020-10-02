<?php
class DetalleFactura{

  //Atributos
  public $Id_Comp;
  public $Factura_NumFactura;
  public $Cant_prod;
  public $SubTotal;
  public $Iva_prod;

  //Metodos

  public function DetalleFactura($Id_Comp){
    $this->Id_Comp=$Id_Comp; 
  }
  public function Set_Factura_NumFactura($Factura_NumFactura){
    $this->Factura_NumFactura=$Factura_NumFactura;
  }
  public function Set_Cant_prod($Cant_prod){
    $this->Cant_prod=$Cant_prod;
  }
  public function Set_SubTotal($SubTotal){
    $this->SubTotal=$SubTotal;
  }
  public function Set_Iva_prod($Iva_prod){
    $this->Iva_prod=$Iva_prod;
  }
  public function Set_Fecha_Fac($Fecha_Fac){

  public function Get_Id_Comp(){
    return $this->Id_Comp;
  }
  public function Get_Factura_NumFactura(){
    return $this->Factura_NumFactura;
  }
  public function Get_Cant_prod(){
    return $this->Cant_prod;
  }
  public function Get_SubTotal(){
    return $this->SubTotal;
  }
  public function Get_Iva_prod(){
    return $this->Iva_prod;
  }
  
}
?>