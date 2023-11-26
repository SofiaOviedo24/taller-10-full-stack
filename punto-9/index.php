<?php

$number = 0;
$i=0; 

echo "Digite el número a multiplicar: ";
$number = readline();

while ($i <= 30){
  $result = $number + $i;
  echo $number." X ". $i. " = ". $result. "\n" ;
  $i++;
}

?>
