<?php
function hasSecurityLong ($pass){
  if (strlen($pass) >= 8){
  echo "Su contraseña tiene 8 caracteres \n" ;
}else{
  echo "Su contraseña no tiene 8 caracteres \n";
}
}

function hasUpperLetter ($pass){
  $arrayPass = str_split($pass);
  foreach ($arrayPass as $letter){
    if (ctype_upper($letter)){
      echo "Su contraseña tiene una letra mayuscula\n"; 
      return;
    }} 
      echo"Su contraseña no tiene una letra mayuscula\n";
}

function hasNumber ($pass){
   $arrayPass = str_split($pass);
  foreach ($arrayPass as $letter){
  if (is_numeric($letter)){
    echo "Su contraseña tiene una número \n"; 
    return;
  }}
  echo"Su contraseña no tiene una número\n";

}
?>