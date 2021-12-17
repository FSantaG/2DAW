<?php
    session_start();
    $_SESSION['alumno'] = "Frenando";
    //Se acaba de iniciar una sesión y almacenado un dato en la variable superglobal
?>
<a href="accesoaula.php">Acceso al aula</a>