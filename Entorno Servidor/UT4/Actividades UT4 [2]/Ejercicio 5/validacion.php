<?php
function valida_operando1(&$ope1, &$e)
{
    if (!empty($_POST["ope1"])) {
        if (!filter_var($_POST["ope1"], FILTER_VALIDATE_INT) === false) {
            if ($_POST["ope1"] >= 0 && $_POST["ope1"] <= 100) {
                $ope1 = $_POST["ope1"];
            } else {
                $e = "Error. El dato debe ser mayor que 0 y menor que 100";
            }
        } else {
            $e = "Error. Debe ser un numero entero";
        }
    } else {
        $e = "Error. El dato esta vacio";
    }
}

function valida_operando2(&$ope2, &$e)
{
    if (!empty($_POST["ope2"])) {
        if (!filter_var($_POST["ope2"], FILTER_VALIDATE_INT) === false) {
            if ($_POST["ope2"] >= 0 && $_POST["ope2"] <= 100) {
                $ope2 = $_POST["ope2"];
            } else {
                $e = "Error. El dato debe ser mayor que 0 y menor que 100";
            }
        } else {
            $e = "Error. Debe ser un numero entero";
        }
    } else {
        $e = "Error. El dato esta vacio";
    }
}

function valida_operador(&$operador, &$e)
{
    if (!empty($_POST["operador"])) {
        if ($_POST["operador"] == "+" OR $_POST["operador"] == "-" OR $_POST["operador"] == "*" OR $_POST["operador"] == "/") {
            $operador = $_POST["operador"];
        } else {
            $e = "Error. Debe introducir un signo correcto";
        }
    } else {
        $e = "Error. El dato esta vacio";
    }
}
