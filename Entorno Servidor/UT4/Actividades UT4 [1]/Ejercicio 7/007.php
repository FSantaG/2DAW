<?php
//Función validación
function valida_dato(){
    $patron='/^[a,z]{3,}/i';
    return preg_match($patron,$_POST["respuesta"]);
}
//Recogida de datos
$Errordato="";
if (isset($_POST["respuesta"])) {
    if(!empty($_POST["enviar"])){
        if(valida_dato()==0){
            $Errordato="Error. Sólo Caracteres [a-z][A-Z]";
        }
        else{
            $respuesta = strtolower($_POST["respuesta"]);
            if ($respuesta != "blanco") {
                echo ("<h1>¡Incorrecto!</h1>");
            } else echo ("<h1>¡Correcto!</h1>");
}
    }else $Errordato = "Error: El dato está vacío";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Post con envío en el mismo formulario</title>
</head>

<body>
    <form action="" method="post">
        <fieldset>
            <legend>PREGUNTA</legend>
            <label name="pregunta">
                ¿De qué color es el caballo blanco de Santiago?
                <input type="text" name="respuesta"/>
            </label>
        </fieldset>
        <input type="submit" value="Enviar" />
    </form>
</body>

</html>