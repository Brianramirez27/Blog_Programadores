<?php 
// se crea una funcion para aotocargar las clases sin tener que cargar una por una
function autocargar($clasename){
 include "controllers/".$clasename.".php";
} 
spl_autoload_register("autocargar");
?>