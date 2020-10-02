<?php
class Inventario_has_DetalleFactura{
  Public $Inventario_Entradas_2;
  Public $DetalleFatura_Id_Comp;

/* -----------Metodos Set---------- */
Public function Inventario_has_DetalleFactura($Inventario_Entradas_2){
  $this->Inventario_Entradas_2=$Inventario_Entradas_2;
}
Public function Set_DetalleFatura_Id_Comp($DetalleFatura_Id_Comp){
  $this->DetalleFatura_Id_Comp=$DetalleFatura_Id_Comp;
}

/* Metodos Get */
Public function Get_Inventario_Entradas_2(){
  return $this->Inventario_Entradas_2;
}
Public function Get_DetalleFatura_Id_Comp(){
  return $this->DetalleFatura_Id_Comp;
}
}

?>