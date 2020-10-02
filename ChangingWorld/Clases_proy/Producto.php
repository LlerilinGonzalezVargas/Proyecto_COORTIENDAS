<?php
class Producto{
  /* Atributos */
 Public $Id_prod ; 
 Public $EstadoProd_Id_est_prod ; 
Public $TipProd_Id_tip_prod ; 
public $Proveedor_Empre_Prov_ID_emp_prov;
 public $Proveedor_Id_prov ;
 public $Name_prod ;
 public $Img_prod ;
 public $Carac_prod ;
 public $Puntua_prod ;
 public $Val_prod ;
 public $Iva_prod ;
 public $Presen_prod ;
 public $Tam_prod ;

/* ------------------Metodos Set-------------------*/
public function Producto($Id_prod){
  $this->Id_prod=$Id_prod;
}

Public Function Set_EstadoProd_Id_est_prod($EstadoProd_Id_est_prod){
  $this->EstadoProd_Id_est_prod=$EstadoProd_Id_est_prod;
}
Public Function Set_TipProd_Id_tip_prod($TipProd_Id_tip_prod){
  $this->TipProd_Id_tip_prod=$TipProd_Id_tip_prod;
}
Public Function Set_Proveedor_Empre_Prov_ID_emp_prov($Proveedor_Empre_Prov_ID_emp_prov){
  $this->Proveedor_Empre_Prov_ID_emp_prov=$Proveedor_Empre_Prov_ID_emp_prov;
}
Public Function Set_Proveedor_Id_prov($Proveedor_Id_prov){
  $this->Proveedor_Id_prov=$Proveedor_Id_prov;
}
Public Function Set_Name_prod($Name_prod){
  $this->Name_prod=$Name_prod;
}
Public Function Set_Img_prod($Img_prod){
  $this->Img_prod=$Img_prod;
}
Public Function Set_Carac_prod($Carac_prod){
  $this->Carac_prod=$Carac_prod;
}
Public Function Set_Puntua_prod($Puntua_prod){
  $this->Puntua_prod=$Puntua_prod;
}
Public Function Set_Val_prod($Val_prod){
  $this->Val_prod=$Val_prod;
}
Public Function Set_Iva_prod($Iva_prod){
  $this->Iva_prod=$Iva_prod;
}
Public Function Set_Presen_prod($Presen_prod){
  $this->Presen_prod=$Presen_prod;
}
Public Function Set_Tam_prod($Tam_prod){
  $this->Tam_prod=$Tam_prod;
}
/* Metodos Get */
 Public function Get_Id_prod(){
   return $this->Id_prod;
 }
 Public function Get_EstadoProd_Id_est_prod(){
   return $this->EstadoProd_Id_est_prod;
 }
 Public function Get_TipProd_Id_tip_prod(){
   return $this->TipProd_Id_tip_prod;
 }
 Public function Get_Proveedor_Empre_Prov_ID_emp_prov(){
   return $this->Proveedor_Empre_Prov_ID_emp_prov;
 }
 Public function Get_Proveedor_Id_prov(){
   return $this->Proveedor_Id_prov;
 }
 Public function Get_Name_prod(){
   return $this->Name_prod;
 }
 Public function Get_Img_prod(){
   return $this->Img_prod;
 }
 Public function Get_Carac_prod(){
   return $this->Carac_prod;
 }
 Public function Get_Puntua_prod(){
   return $this->Puntua_prod;
 }
 Public function Get_Val_prod(){
   return $this->Val_prod;
 }
 Public function Get_Iva_prod(){
   return $this->Iva_prod;
 }
 Public function Get_Presen_prod(){
   return $this->Presen_prod;
 }
 Public function Get_Tam_prod(){
   return $this->Tam_prod;
 }




}
?>