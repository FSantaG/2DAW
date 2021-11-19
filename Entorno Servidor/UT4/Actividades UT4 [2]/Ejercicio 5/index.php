<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            color: #318aac !important;
            font-size: 20px;
            font-weight: 500;
            padding: 0.5em 1.2em;
            background: rgba(0, 0, 0, 0);
            border: 2px solid;
            border-color: #318aac;
            transition: all 1s ease;
            position: relative;
        }

        input:hover {
            background: #318aac;
            color: #fff !important;
        }
    </style>
</head>

<body>
    <?php
    require_once("./valores.php");
    require_once("./validacion.php");
    require_once("./clase_operacion.php");

    if (isset($_POST["enviar"])) {
        valida_operando1($ope1, $errores["errorope1"]);
        valida_operando2($ope2, $errores["errorope2"]);
        valida_operador($operador, $errores["erroroperador"]);
        if ((!empty($ope1)) && (!empty($ope2)) && (!empty($operador))) {
            $ob_operacion = new Operacion($ope1, $ope2, $operador);
            echo $ob_operacion->calculo();
            exit;
        }
    }
    ?>

    <form action="" target="_nblank" method="post">
        Operando 1: <input type="text" name="ope1" value="<?php echo "$ope1" ?>">
        <span>
            <font color="red"> * obligatorio <?php echo $errores["errorope1"]; ?></font>
        </span><br>
        Operando 2: <input type="text" name="ope2" value="<?php echo "$ope2" ?>">
        <span>
            <font color="red"> * obligatorio <?php echo $errores["errorope2"]; ?> </font>
        </span><br>
        Operanción (+ - * /): <input type="text" name="operador">
        <span>
            <font color="red"> * obligatorio <?php echo $errores["erroroperador"]; ?></font>
        </span><br>
        <input type="submit" name="enviar">
    </form>

    </form>

</body>

</html>