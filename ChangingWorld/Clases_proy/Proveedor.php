<?php
 class Proveedor{

  /* ----------------Atributos -----------------*/
  Public $Id_prov ;   
  Public $Empre_Prov_ID_emp_prov ;   
  Public $EstadoProv_Id_est_prov ; 
  Public $Name_Prov ;   
  Public $Cel_Prov ; 
  Public $Email_prov ; 
  Public $Tel_Prov ; 
  Public $Cedu_prov ; 
  Public $Dir_prov ; 
  Public $Notas_prov ; 

/* -----------------Metodos set -----------------*/
 Public function Proveedor($Id_prov){
   $this->Id_prov=$Id_prov;
 }
 Public function Set_Empre_Prov_ID_emp_prov($Empre_Prov_ID_emp_prov){
   $this->Empre_Prov_ID_emp_prov=$Empre_Prov_ID_emp_prov;
 }
 Public function Set_EstadoProv_Id_est_prov($EstadoProv_Id_est_prov){
   $this->EstadoProv_Id_est_prov=$EstadoProv_Id_est_prov;
 }
 Public function Set_Name_Prov($Name_Prov){
   $this->Name_Prov=$Name_Prov;
 }
 Public function Set_Cel_Prov($Cel_Prov){
   $this->Cel_Prov=$Cel_Prov;
 }
 Public function Set_Email_prov($Email_prov){
   $this->Email_prov=$Email_prov;
 }
 Public function Set_Tel_Prov($Tel_Prov){
   $this->Tel_Prov=$Tel_Prov;
 }
 Public function Set_Cedu_prov($Cedu_prov){
   $this->Cedu_prov=$Cedu_prov;
 }
 Public function Set_Dir_prov($Dir_prov){
   $this->Dir_prov=$Dir_prov;
 }
 Public function Set_Notas_prov($Notas_prov){
   $this->Notas_prov=$Notas_prov;
 }
/*  ----------------Metodos Get ------------------*/
 Public Function Get_Id_prov(){
   return $this->Id_prov;
 } 
 Public Function Get_Empre_Prov_ID_emp_prov(){
   return $this->Empre_Prov_ID_emp_prov;
 } 
 Public Function Get_EstadoProv_Id_est_prov(){
   return $this->EstadoProv_Id_est_prov;
 } 
 Public Function Get_Name_Prov(){
   return $this->Name_Prov;
 } 
 Public Function Get_Cel_Prov(){
   return $this->Cel_Prov;
 } 
 Public Function Get_Email_prov(){
   return $this->Email_prov;
 } 
 Public Function Get_Tel_Prov(){
   return $this->Tel_Prov;
 } 
 Public Function Get_Cedu_prov(){
   return $this->Cedu_prov;
 } 
 Public Function Get_Dir_prov(){
   return $this->Dir_prov;
 } 
 Public Function Get_Notas_prov(){
   return $this->Notas_prov;
 }
/*------------------- Metodos de consulta-------------------- */
public function Crear_Empre_Prov(,$Id_emp  ,$EstadoUsu_Id_est_usu  ,$Solicitud_empleado_idSolicitud  ,$Name_emp  ,$Email_emp  ,$Pass_emp  ,$Img_emp  ,$Id_supvisor  ,$Obser_emp  ,$Edad_emp  ){
  $this->Id_emp=$Id_emp;
$this->EstadoUsu_Id_est_usu=$EstadoUsu_Id_est_usu;
$this->Solicitud_empleado_idSolicitud=$Solicitud_empleado_idSolicitud;
$this->Name_emp=$Name_emp;
$this->Email_emp=$Email_emp;
$this->Pass_emp=$Pass_emp;
$this->Img_emp=$Img_emp;
$this->Id_supvisor=$Id_supvisor;
$this->Obser_emp=$Obser_emp;
$this->Edad_emp=$Edad_emp;
}
public function Agregar_Empre_Prov(){

}
Public function Actualizar_Empre_Prov($Id_emp){

} 
Public function Consultar_Empre_Prov($Id_emp){

}




 }

?>