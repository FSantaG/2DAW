<?php
    declare (strict_types=1);
    function suma($a, $b):string{
        $suma = $a + $b;
        return $suma;
    }
    
    /* function controladorExcepciones($exception){
        echo "Se ha producido un error. Vuelva a intentarlo más tarde";
    }

    set_exception_handler("controladorExcepciones");

    throw new Exception("Error en la ejecución"); */
    try{
        echo "La suma es ".suma(2,4);
    }catch(Error $e){
        echo "Se ha producido un error. Vuelva a intentarlo más tarde";
        error_log("Suma devuelve un valor de tipo Int en lugar de tipo String");
    }
?>