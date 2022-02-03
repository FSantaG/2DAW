<?php
/**
 * Prueba de acceso de Difadi.com
 * 
 * Esto es una simulación de pequeño proyecto que sirve para limpiar ciertos
 * registros de base de datos cuando se encuentran desactivados. Las consultas
 * de BBDD se emulan con las funciones presentes en el proyecto.
 * 
 * Recomiendo leer todas las clases de este proyecto antes de comenzar.
 * Dos de los enunciados están en esas clases.
 * 
 * Una vez que funcione todo el proyecto (de forma simulada), añadir una acción
 * para limpiar usuarios desactivados.
 * 
 * @author <Nombre> <Mail>
 * @date <Fecha>
 */

include( 'autoload.php' );

// Leemos si se quiere limpiar algún recurso
if( isset( $_GET[ 'clean' ] ) )
{
    $action = 'Clean' . $_GET[ 'clean' ];
    DifadiDispatch::dispatch( $action );
} else {
    echo "No se ha solicitado ninguna acción";
}