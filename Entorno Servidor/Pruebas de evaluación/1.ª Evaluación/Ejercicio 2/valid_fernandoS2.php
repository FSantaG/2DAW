<?php
    /*Función de validación del precio */
    function validarPrecio(&$precio, &$e){
        if(!empty($_POST["precio"])){
            if(filter_var($_POST["precio"],FILTER_VALIDATE_FLOAT)){
                if($_POST["precio"]>0){
                    $precio = $_POST["precio"];
                }else{
                    $e = "Introduzca un valor decimal POSITIVO";
                }
            }else {
                $e = "El valor tiene que ser un número decimal (Use punto en lugar de coma, por favor)";
            }
        }else{
            $e = "Inserte un valor numérico";
        }
    }
?>