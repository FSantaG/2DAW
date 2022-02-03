<?php
/**
 * Autoloader de clases para la prueba de Difadi.com
 */
spl_autoload_register( function( $class ) {
    include 'classes/' . $class . '.class.php';
});