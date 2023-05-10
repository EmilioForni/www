<?php
require_once 'gest/conexion.php';

// Obtener todos los empleados de la base de datos
$sql = "SELECT * FROM empleados";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Recorrer todos los empleados y actualizar sus contraseñas
    while ($row = $result->fetch_assoc()) {
        $usuario = $row['usuario'];
        $password_sin_cifrar = $row['clave'];

        // Cifrar la contraseña utilizando password_hash()
        $password_cifrada = password_hash($password_sin_cifrar, PASSWORD_DEFAULT);

        // Actualizar la contraseña cifrada en la base de datos
        $sql_update = "UPDATE empleados SET clave = ? WHERE usuario = ?";
        $stmt = $conn->prepare($sql_update);
        $stmt->bind_param('ss', $password_cifrada, $usuario);
        $stmt->execute();

        echo "Contraseña actualizada para el usuario: " . $usuario . "<br>";
    }
} else {
    echo "No se encontraron empleados en la base de datos.";
}

$conn->close();
