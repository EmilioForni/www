<?php

$clave = "3105";
$clave_cifrada = password_hash($clave, PASSWORD_DEFAULT);

echo "Clave ingresada: " . $clave . "<br>";
echo "Clave cifrada: " . $clave_cifrada . "<br>";

?>
