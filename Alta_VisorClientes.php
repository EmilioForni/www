<?php
    require_once('marcosup.php');
?>

    <div class="section">
        <div class="container">
            <div class="row text-center">
                <div class="text-center mx-auto col-10">
                    <h1 class="text-center text-primary">Visor Alta de datos de "Clientes"</h1>
                </div>
            </div>
            <div class="row text-center">
                <div class="text-center mx-auto col-10">
                    <?php
                    // Todas las variables que ha enviado el Formulario
                    $dni=$_POST['DNI'];     // Variable que recoge el...
                    $nombre=$_POST['Nombre'];     // Variable que recoge el...
                    $apellidos=$_POST['Apellidos'];        // Variable que recoge el...
                    $correo=$_POST['Correo'];        // Variable que recoge el...
                    $direccion=$_POST['Direccion'];        // Variable que recoge el...
                    $telefono=$_POST['Telefono'];        // Variable que recoge el...

                    // Muestra los datos recogidos durante la fase de desarrollo.
                    // Luego se ocultan o comentan estas líneas
                    echo "<hr>Para comprobar muestra los datos recogidos: ";
                    echo '<table class="table table-bordered table-hover table-condensed table-responsive">';
                    echo "<tr><td>DNI: </td><td><b>$dni</b></td></tr>";
                    echo "<tr><td>Nombre: </td><td><b>",$nombre,"</b></td></tr>";
                    echo "<tr><td>Apellidos: </td><td><b>",$apellidos,"</b></td></tr>";
                    echo "<tr><td>Correo electrónico: </td><td><b>",$correo,"</b></td></tr>";
                    echo "<tr><td>Dirección: </td><td><b>",$direccion,"</b></td></tr>";
                    echo "<tr><td>Teléfono: </td><td><b>",$telefono,"</b></td></tr>";
                    echo "</table>";

                    // Indica la tabla sobre la que va a realizar la operación de alta
                    $tabla="clientes"; // Entre comillas indicamos el nombre de la tabla

                    // Construye la sentencia de inserción de los datos
                    $sentencia="INSERT INTO $tabla (DNI, Nombre, Apellidos, Correo, Direccion, Telefono) VALUES ('$dni','$nombre','$apellidos','$correo','$direccion','$telefono');";

                    // Muestra la sentencia que va a ejecutar por si aparecen errores. Luego se puede ocultar esta línea.
                    echo "<br>Sentencia:<br><font color='green'>". $sentencia."</font>";

                    // A continuación ejecuta la sentencia
                    $conn = mysqli_connect($Servidor_conexion, $login_conexion, $password_conexion, $base) or trigger_error(mysqli_error(),E_USER_ERROR);
                    if (mysqli_query($conn, $sentencia)) {
                        echo "<h2>Confirmada Alta como del registro: ".$dni." - ".$nombre." - ".$apellidos." - ".$correo." - ".$direccion." - ".$telefono."</h2>";
                    }
                    else {
                        echo "<br><h2>No insertado. Compruebe errores en los datos de entrada.</h2>";
                    }
                    mysqli_close($conn);
                    ?>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <hr>
                </div>
            </div>
        </div>
    </div>

<?php
// Cargamos el marco inferior de páginas
require_once('marcoinf.php');
?>
               
