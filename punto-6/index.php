<?php

$name = " ";
$age = 0;

echo "Digite su nombre \n" ;
$name = readline(); 


echo "Hola " . $name . " " . "digite su edad: \n" ;
$age = readline(); 

if ($age >=18){
  echo $name . " " . "eres mayor de edad";}
  else {
  echo $name . " eres menor de edad";}
?>
