<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
}
?>
<?php
require_once('marcosup.php');
?>

<div class="section">
    <div class="container">
        <div class="row text-center">
            <div class="text-center mx-auto col-10">
                <h1 class="text-center text-primary">Formulario Alta de datos de Servicios</h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="text-left mx-auto col-10">
                <form method="POST" action="Alta_VisorServicios.php">
                    <!-- Dato 2-->
                    Servicio:<br>
                    <select name="servicio">
                        <option value="Montaje de redes">Montaje de redes</option>
                        <option value="Solución de problemas">Solución de problemas</option>
                        <option value="Consultoría en redes">Consultoría en redes</option>
                        <option value="Otros">Otros (especificar en la descripción)</option>
                    </select><br>
                    <!-- Dato 3-->
                    Precio:<br>
                    <input type="text" name="precio" size="45" value=""><br>
                    <!-- Dato 4-->
                    Foto:<br>
                    <input type="text" name="foto" size="45" value=""><br>
                    <!-- Dato 5-->
                    Descripcion:<br>
                    <input type="text" name="descripcion" size="45" value=""><br>
                    <!-- Dato 6-->
                    Descripcion 2:<br>
                    <input type="text" name="desc2" size="45" value=""><br>

                    <!-- Botones del Formulario -->
                    <hr>
                    <input type="submit" value="ENVIAR">
                    -
                    <input type="reset" value="LIMPIAR">
                </form>
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
    require_once('marcoinf.php');
?>
