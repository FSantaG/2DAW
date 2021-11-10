<?php
if (isset($_POST["valor"])) {
    echo "Tabla de multiplicar del",$_POST["valor"],"</br>";
    $respuesta= $_POST["valor"];
    for($i=0; $i<=10; $i++){
        echo "$respuesta * $i = ",$respuesta*$i,"</br>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
</head>

<body>
    <form action="" method="post">
        <label>
            Introduzca un número: <input type="number" name="valor"/>
        </label>
        <input type="submit" value="Enviar"/>
    </form>
</br>
<p>
    
</p>
</body>
</html> 