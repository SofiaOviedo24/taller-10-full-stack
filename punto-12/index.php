<?php

$number = 0;
echo "Digite el número a multipliar: ";
  $number = readline();

for($i = 0; $i <= 30; $i++){
    $resultado = $number * $i;
   echo $number. " X " . $i . " = " . $resultado . "\n";
}
  
?>