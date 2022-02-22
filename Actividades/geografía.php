<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Elige la comunidad autónoma </title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>


   <?php
    include 'conexion_geo.php'; //Incluimos datos de la conexión
    $conn = mysqli_connect($sevidor,$usuario,$contrasena,$base_datos) or die("No ha sido posible establecer la conexión") ;

    $consulta = "select nombre from comunidades order by nombre;";
    $resultado = mysqli_query($conn, $consulta);

    $num_filas = mysqli_num_rows($resultado);

    if($num_filas > 0){
    ?> 
    
    <form action="provincias.php">
        <label for="comunidad">Elige la comunidad deseada:</label>
            <select name="comunidad">

               <?php
                while($fila = mysqli_fetch_assoc ($resultado))
                    echo "<option value='{$fila["nombre"]}'> {$fila["nombre"]} </option>";
               ?>

            </select>
            <button>Buscar petición</button>
    </form>
   
    <?php
    }
    else
    echo "no funciona ni pa tras";
    ?>
  
</body>
</html>