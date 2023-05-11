<?php        
// Recoge los datos a modificar
// Recoge todas las variables 
        $id=$_POST['id'];    
        $nick=$_POST['nick'];   
		$clave=$_POST['clave']; 
		$nombape=$_POST['nombape'];  
		$nivel=$_POST['nivel'];  

// Invocamos el archivo con la conexión a la base de datos
require_once('marcosup.php');
$sentencia="UPDATE clientes SET 
    nombre_completo='$nick', 
    direccion='$clave', 
    correo_electronico='$nombape', 
    telefono='$nivel'
        WHERE id_cliente=$id";

if (mysqli_query($c,$sentencia))
              {
			   //si ejecuta correctamente la sentencia de borrado recarga la página de Gestión
              header("Location: clientesgestion.php"); 
              }
?>	