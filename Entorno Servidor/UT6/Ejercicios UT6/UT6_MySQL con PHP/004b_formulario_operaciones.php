<?php
require_once("004a_alumnos.php");
$db_host="localhost";
$db_usuario = "root";
$db_clave = "";
$db_nombre = "ciclos";

$id = $_POST["id"];
$nombre= $_POST["nombre"];
$edad=$_POST["edad"];
$id_curso=$_POST["curso"];
$nuevoAlumno = new Alumno($id, $nombre, $edad, $id_curso);


$conexion = mysqli_connect($db_host, $db_usuario, $db_clave);
if(mysqli_connect_errno()){
    echo "Fallo en la conexión <br>";
    exit();
}
mysqli_select_db($conexion, $db_nombre) or die("No se encontró la BD");

if(isset($_POST["agregado"])){
    $consulta = "INSERT into alumno(id_al, nombre, edad, id_curso) VALUES ($nuevoAlumno->id, '$nuevoAlumno->nombre', $nuevoAlumno->edad, $nuevoAlumno->id_curso)";
    $resultados = mysqli_query($conexion, $consulta);
    if($resultados){
        echo "Valor introducido con éxito <br>";
        echo "<a href='./004_formulario_datos.php'>Refrescar formulario</a>";
        exit;
    }else{
        echo mysqli_error($conexion)."<br>";
        echo "<a href='./004_formulario_datos.php'>Refrescar formulario</a>";
        exit;
    }
}else if(isset($_POST["borrado"])){
    $consulta = "DELETE FROM alumno WHERE id_al = $id";
    $resultados = mysqli_query($conexion, $consulta);
    if($resultados){
        echo "Valor borrado con éxito <br>";
        echo "<a href='./004_formulario_datos.php'>Refrescar formulario</a>";
        exit;
    }else{
        echo mysqli_error($conexion)."<br>";
        echo "<a href='./004_formulario_datos.php'>Refrescar formulario</a>";
        exit;
    }
}else if(isset($_POST["visualizado"])){
    echo "<table>
            <thead>
                <tr>
                    <th>id_al</th>
                    <th>nombre</th>
                    <th>edad</th>
                    <th>id_curso</th>
                </tr>
            </thead>
            <tbody>";
    $consulta = "SELECT * from alumno";
    $resultados = mysqli_query($conexion, $consulta);
    while($fila=mysqli_fetch_row($resultados)){
        echo "<tr><td>".$fila[0]."</td><td> ".$fila[1]."</td><td> ".$fila[2]."</td><td> ".$fila[3]."</td></tr>";
    }
    echo "</tbody></table>";
    echo "<a href='./004_formulario_datos.php'>Refrescar formulario</a>";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        table{
            border-collapse: collapse;
            background-color: lightgrey;
            text-align: center;
        }
        td,th{
            border: 2px black solid;
        }
    </style>
</head>
<body>
    
</body>
</html>