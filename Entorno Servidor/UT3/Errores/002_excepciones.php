<?php
/*Captura de un error utilizando el formato de excepciones tradicional */
    /* try{
        coun($n);
    }
    catch(Error $e){
        echo "Error capturado: ".$e->getMessage();        
    }
    echo ("<br>Continua"); */

    //Captura de un error utilizando un menejador de excepciones
    function micontrolexcep1($excep){
        echo ("Lo sentimos, la aplicacion no está disponible");error_log($excep->getMessage());
    }
    ini_set("display_error", 0);
    set_exception_handler("micontrolexcep1");
    
    //coun() provoca un error fatal

    echo ("<br> Continua");
?>