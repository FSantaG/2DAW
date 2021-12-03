<?php
    require_once("./controladores.php");
    set_error_handler("controlador");
    define("CONSTANTE", "Valor");
    define("CONSTANTE", "Otro Valor");
    echo VALOR_EDAD;
    echo (mktime());
    $texto = "Texto de Ejemplo";
    echo count($texto);
    restore_error_handler();
?>