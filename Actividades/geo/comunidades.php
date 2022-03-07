<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elección de comunidad autónoma</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php
        include 'conexion_geo.php'; 
        $conn=mysqli_connect($servidor,$usuario,$contrasena,$base_datos) or die ("No ha sido posbile establecer la conexión");
        $consulta= "select nombre from comunidades order by nombre;";
        $resultado=mysqli_query ($conn, $consulta); 

        if(mysqli_num_rows ($resultado)>0){
    ?>
    <form action="provincias.php">
        <label for="comunidades">Elija la comunidad deseada</label>
        <select name="comunidades">
            <?php
                while($fila=mysqli_fetch_assoc($resultado))
                    echo "<option value='{$fila["nombre"]}'>{$fila ["nombre"]}</option>";

            ?>
        </select>

        <button>Buscar provincias</button> 

    </form>
    <?php
        }   
        else{
            echo "No se han encontrado datos en la tabla";
        }
    ?>     
        </select>

    </form>
</body>
</html>