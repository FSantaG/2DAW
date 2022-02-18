<?php
    switch($_POST["enviar"]){
        case "Consultar":
            require_once("../views/consultar.html");
            break;
        case "Insertar":
            require_once("../views/insertar.html");
            break;
        case "Borrar":
            require_once("../views/borrar.html");
            break;
    }
?>
