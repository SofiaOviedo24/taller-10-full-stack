<?php

$numeroPersonas = 0; 
$tipoDeAfiliacion = " ";
const PRECIO_BOLERA = 25000;

echo "Digite el número de personas que entraran a la bolera: ";
$numeroPersonas = readline();

echo "Digite el tipo de afiliación: " ;
$tipoDeAfiliacion = readline();

$subTotal = $numeroPersonas * PRECIO_BOLERA;

Switch (strtoupper($tipoDeAfiliacion)) {
  case "A":
  $descuento = $subTotal * 0.30; 
  $total = $subTotal - $descuento; 
   break;
  case "B":
  $descuento = $subTotal * 0.25; 
  $total = $subTotal - $descuento; 
   break;
  case "C":
  $descuento = $subTotal * 0.10; 
  $total = $subTotal - $descuento; 
   break;
  case "D":
  $descuento = $subtotal * 0.05; 
  $total = $subTotal - $descuento; 
   break;
}
echo "El total a pagar es: " . number_format($total);

?>
