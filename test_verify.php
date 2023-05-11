<?php

$clave = "3105";
$clave_almacenada = '$2y$10$Vp8YywYN.RNnlPLZgxo47.pOK1FLGOb3Nk9e8BBrV2JlFIyxSQvaG';

$verificacion = password_verify($clave, $clave_almacenada);

echo "Clave ingresada: " . $clave . "<br>";
echo "Clave almacenada (cifrada): " . $clave_almacenada . "<br>";
echo "Resultado de password_verify(): ";
var_dump($verificacion);
echo "<br>";

?>
