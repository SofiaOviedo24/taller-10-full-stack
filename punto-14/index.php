<?php
include "./passwordCheack.php";

$user  = " ";
$password = " ";

echo "Digite el usuario a registrar\n";
$user = readline();

echo "Digite se contraseña a registrar\n";
$password = readline();
echo hasSecurityLong($password);
echo hasUpperLetter($password);
echo hasNumber($password);

?>
