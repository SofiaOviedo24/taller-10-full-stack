<?php

$sumaImpar = 0;

for($i = 1; $i <= 100; $i++){
  echo $i . "\n";
  $sumaImpar += $i;
}

echo "La suma de los números impares es: " . $sumaImpar;
?>
