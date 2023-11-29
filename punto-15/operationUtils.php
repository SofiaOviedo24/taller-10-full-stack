<?php

function getNumber(){
  return readline("Ingrese un número: ");
}

function showMenu (){

  echo "Ingrese la opción que desea realizar: \n";
     echo "1 - SUMA \n";
     echo "2 - RESTA \n";
     echo "3 - MULTIPLICACIÓN \n";
     echo "4 - DIVISIÓN \n";
    
  
  return readline("Ingrese una opción: ");
}

function operate($numberOne, $numberTwo, $option){
  switch($option){
    case 1: 
    return add ($numberOne, $numberTwo);

    case 2: 
    return add ($numberOne, $numberTwo);
      
    case 3: 
    return multiply ($numberOne, $numberTwo);

    case 4: 
    return divide ($numberOne, $numberTwo);

      default:
    echo "Opcion no valida";
    return 0;
  }
}

function add($numberOne, $numberTwo){
  return $numberOne + $numberTwo;
}

function sub($numberOne, $numberTwo){
  return $numberOne - $numberTwo;
}

function multiply($numberOne, $numberTwo){
  return $numberOne * $numberTwo;
}
function divide($numberOne, $numberTwo){
  return $numberOne / $numberTwo;
}
?>