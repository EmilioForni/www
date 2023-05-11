<?php

$clave = "3105";
$clave_almacenada = '$2y$10$GOebgCKmGBjAcsFXudkhher';

$verificacion = password_verify($clave, $clave_almacenada);

echo "Resultado de password_verify(): ";
var_dump($verificacion);
echo "<br>";

?>
