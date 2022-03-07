<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elección de localidad</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php
        include 'conexion_geo.php';

        $conn=mysqli_connect($servidor,$usuario,$contrasena,$base_datos) or die ("No ha sido posible establecer la conexión");
        if (isset($_GET['provincias'])==false){

        }
        else{
        
        $provincias= $_GET['provincias'];

        $consulta= "select l.nombre from localidades l, provincias p where p.n_provincia=l.n_provincia and p.nombre='{$provincias}';";
        $resultado=mysqli_query ($conn, $consulta);

        if(mysqli_num_rows($resultado)>0){
    ?>
        <form>
            <label for="localidades">Elija la localidad deseada</label>
            <select name="localidades">
                <?php
                    while($fila=mysqli_fetch_assoc($resultado))
                        echo "<option value='{$fila["nombre"]}'>{$fila ["nombre"]}</option>";
                ?>
            </select>

            <button>Consultar habitantes</button> 

        </form>
            <?php
        }   
                else
                    echo "No hay datos en la tabla";
                
    }   
        
                if (isset($_GET['localidades'])==true){
                    $localidades= $_GET['localidades'];
                    $consulta2= "select l.poblacion from localidades l where l.nombre='{$localidades}';";
                    // aquí se ejecuta realmente la consulta
                    $resultado2 = mysqli_query ($conn, $consulta2);
                        while ($loc = mysqli_fetch_assoc ($resultado2)){
                            echo " El numero de habitantes de {$localidades} es {$loc["poblacion"]}";
                        }

                }
            ?> 

</body>
</html>

