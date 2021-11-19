<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*Inclusión de otros documentos con código PHP*/
        require_once("valid_fernandoS2.php");
        require_once ("libro_fernandoS2.php");
        require_once("valores_fernandoS2.php");
        /*Comprobación de enviado.
        Si se ha presionado el botón de enviar, este código PHP se ejecutará. 
        Si, por el contrario, no se ha hecho, no se ejecutará y realizará el HTML normal.
        */
        if(isset($_POST["enviar"])){
            /*Validación del formato de precio. Si está en un formato correcto, se obtiene el valor del precio. Si no, 
            se obtiene un mensaje de error que dará pistas al usuario.*/
            validarPrecio($precio, $errores["errorprecio"]);
            if(!empty($precio)){
                $libro = new Libro($_POST["titulo"], $precio);
                echo $libro->getLibro();
                exit;
            }
        }
    ?>
    <form method="post" action="" target="_nblank">
        <label>
            Teclee el título: <input type="text" name="titulo" value="<?php echo $titulo;?>"/>
            <span>
                <font color="red">*Obligatorio </font>
                </br>
            </span>
        </label>
        <label>
            Teclee el precio <input type="text" name="precio" value="<?php echo $precio;?>"/>
            <span>
                <font color="red">*Obligatorio <?php echo $errores["errorprecio"];?></font>
            </span>
            </br>
        </label>
        <label>
            Elige la fecha de compra: 
            <input type="radio" name="fecha" value="navidad"/>Navidad
            <input type="radio" name="fecha" value="ferialibro"/>Feria del Libro
            </br>
        </label>
        <input type="submit" name="enviar" value="Enviar"/>
    </form>
</body>
</html>