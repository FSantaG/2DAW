<?php
    function controlador($nivel, $mensaje){
        switch ($nivel){
            case E_NOTICE:
                error_log("Error de tipo NOTICE");
                break;
            case E_WARNING:
                error_log("Error de tipo WARNING");
                break;
            case E_DEPRECATED:
                error_log("Error de tipo DEPRECATED");
                break;
        }
    }
?>