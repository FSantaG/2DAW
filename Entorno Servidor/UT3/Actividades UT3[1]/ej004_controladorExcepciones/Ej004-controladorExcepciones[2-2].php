<?php
    function suma($a,$b){
        return $suma = $a + $b;
    }

/* function controladorExcepciones($exception){
        echo "Se ha producido un error. Vuelva a intentarlo más tarde";
    }

    set_exception_handler("controladorExcepciones");

    throw new Exception("Error en la ejecución"); */

   try{
       suma(3);
   }catch(Error $e){
       echo "Se ha producido un error. Vuelva a intentarlo más tarde";
       error_log("Se han pasado menos parámetros de los necesarios");
   }
?>