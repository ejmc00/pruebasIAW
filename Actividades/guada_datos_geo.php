<?php 
include("conexion_geo.php");

$conn = mysqli_connect($sevidor,$usuario,$contrasena,$base_datos) or die("No ha sido posible establecer la conexión") ;
echo "Se ha conectado correctamente <br>";

isset($_GET['nombre']) ? print "El nombre es " . $_GET['nombre'] : "";

if(isset($_GET['nombre'])){
   
  $insertar = "INSERT INTO persona (nombre, edad) VALUES ('{$_GET['nombre']}', {$_GET['edad']});";

  $resuntado =  mysqli_query($conn, $insertar) or die("No se ha realizado la conexion"); 
}



?>