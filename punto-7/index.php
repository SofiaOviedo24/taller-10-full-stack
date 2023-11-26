<?php
$firstNumber = 0;
$secondNumber = 0;
$opcion = 0;
$resultado = 0;

echo "Elija la operación que desea realizar: \n";
  echo "1) SUMA \n" ;
  echo "2) RESTA \n";
  echo "3) MULTIPLICACIÓN\n";
  echo "4) DIVISIÓN\n";

$opcion = readline("Ingrese la opción: ");

echo "Digite el primer número a operar: \n";
$firstNumber = readline();

echo "Digite el segundo número a operar: \n";
$secondNumber = readline();

switch($opcion){
  case 1:
    $resultado = $firstNumber + $secondNumber;
  echo $firstNumber . " + " . $secondNumber . " = " . $resultado;
  break;

  case 2:
    $resultado = $firstNumber - $secondNumber;
  echo $firstNumber . " - " . $secondNumber . " = " . $resultado;
  break;

  case 3:
    $resultado = $firstNumber * $secondNumber;
  echo $firstNumber . " X " . $secondNumber . " = " . $resultado;
  break;

  case 4:
    $resultado = $firstNumber / $secondNumber;
  echo $firstNumber . " / " . $secondNumber . " = " . $resultado;
  break;
  default:
  echo "Lo sentimos usted no ha seleccionado una opción valida \n"; 
}
?>