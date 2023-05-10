<?php
session_start();
require_once('gest/conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $query = "SELECT * FROM empleados WHERE usuario = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($clave, $row['clave'])) {
            $_SESSION['usuario'] = $usuario;
            header("Location: index.php");
            exit();
        } else {
            $error_msg = "Usuario o contraseña incorrectos.";
        }
    } else {
        $error_msg = "Usuario o contraseña incorrectos.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E8F2F4;
        }
        h1 {
            color: #0077be;
            text-align: center;
            margin-top: 30px;
        }
        form {
            background-color: #FFFFFF;
            width: 50%;
            margin: auto;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            margin-top: 30px;
            margin-bottom: 30px;
        }
        label {
            display: block;
            margin-top: 20px;
            color: #0077be;
            font-size: 18px;
        }
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 18px;
        }
        input[type=submit] {
            background-color: #0077be;
            color: #FFFFFF;
            padding: 14px 20px;
            margin: 20px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 18px;
        }
        input[type=submit]:hover {
            background-color: #004a80;
        }
        p.error {
            color: red;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Iniciar sesión</h1>
    <form action="login.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <label for="clave">Contraseña:</label>
        <input type="password" name="clave" id="clave" required>
        <br>
        <input type="submit" value="Iniciar sesión">
    </form>

    <?php if (isset($error_msg)): ?>
<p class=error style="color: red;"><?php echo $error_msg; ?></p>
<?php endif; ?>
</body>
</html>