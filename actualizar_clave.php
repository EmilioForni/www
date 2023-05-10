<?php
require_once 'gest/conexion.php';

$usuario = 'emilio';
$clave = '3105';

// Cifrar la contraseña
$clave_cifrada = password_hash($clave, PASSWORD_DEFAULT);

// Actualizar la contraseña en la base de datos
$sql = "UPDATE empleados SET clave = ? WHERE usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $clave_cifrada, $usuario);

if ($stmt->execute()) {
    echo "Contraseña actualizada correctamente.<br>";
    echo "Usuario: " . $usuario . "<br>";
    echo "Clave ingresada: " . $clave . "<br>";
    echo "Clave cifrada: " . $clave_cifrada . "<br>";
} else {
    echo "Error al actualizar la contraseña: " . $stmt->error . "<br>";
}

$stmt->close();
$conn->close();
?>
