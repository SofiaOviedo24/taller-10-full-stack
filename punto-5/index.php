<?php

$membresia = " "; 
$numbPersonas = 0; 
const PRECIO = 25000;

echo "Digite el número de personas que ingresan a la bolera: \n" ;
$numbPersonas = readline(); 

echo "Digite el tipo de afiliación: \n";
$membresia = readline();

$subTotal= $numbPersonas * PRECIO;

if (strtoupper ($membresia) == "A"  || strtoupper ($membresia)== "B" ) {
  $descuento = $subTotal * 0.7;

}

echo "EL total a pagar es:". number_format ($descuento);

?>