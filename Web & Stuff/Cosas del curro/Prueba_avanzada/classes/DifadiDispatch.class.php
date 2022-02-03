<?php
/**
 * Prueba de acceso de Difadi.com
 * Dispatcher
 */

class DifadiDispatch
{
    /**
     * Función que devuelve el contenido solicitado
     * 
     * @param String $action. Acción a ejecutar
     * @return Mixed $result. Resultado de la acción
     */
    public static function dispatch( $action )
    {
        $result = false;
        $className = 'Difadi' . ucfirst( $action );

        if( class_exists( $className ) )
        {
            $class = new $className();
            $class->run();
            $result = $class->getResult();
        }

        return $result;
    }
}
