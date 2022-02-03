<?php
/**
 * Prueba de acceso de Difadi.com
 * Clase de herramientas
 */

class DifadiTools
{
    // Activar o desactivar depuración
    private const DEBUG_TOOLS = true;
    
    /**
     * Función para realizar consultas SQL
     * 
     * @param String $sql
     * @return Mixed
     */
    public static function query( $sql )
    {
        // Esta función no tiene contenido, solo es para emular la consulta SQL
        $result = true; // Siempre va a decir que OK

        // Mostramos por pantalla la consulta
        if( self::DEBUG_TOOLS )
        {
            echo "<div>{$sql}</div>";
        }
        
        // Devolvemos el resultado
        return $result;
    }

    /**
     * Obtiene todos los productos de la web
     * 
     * Esto es una consulta ficticia
     * 
     * @return Array
     */
    public static function getAllProducts()
    {
        return [
            [ 'id_product' => 1, 'active' => 1, 'name' => 'Producto 1' ],
            [ 'id_product' => 2, 'active' => 0, 'name' => 'Producto 2' ],
            [ 'id_product' => 3, 'active' => 0, 'name' => 'Producto 3' ],
            [ 'id_product' => 4, 'active' => 0, 'name' => 'Producto 4' ],
            [ 'id_product' => 5, 'active' => 1, 'name' => 'Producto 5' ],
            [ 'id_product' => 6, 'active' => 1, 'name' => 'Producto 6' ],
            [ 'id_product' => 7, 'active' => 1, 'name' => 'Producto 7' ],
            [ 'id_product' => 8, 'active' => 0, 'name' => 'Producto 8' ],
            [ 'id_product' => 9, 'active' => 0, 'name' => 'Producto 9' ],
            [ 'id_product' => 10, 'active' => 1, 'name' => 'Producto 10' ],
            [ 'id_product' => 11, 'active' => 0, 'name' => 'Producto 11' ],
            [ 'id_product' => 12, 'active' => 0, 'name' => 'Producto 12' ],
            [ 'id_product' => 13, 'active' => 1, 'name' => 'Producto 13' ],
            [ 'id_product' => 14, 'active' => 1, 'name' => 'Producto 14' ],
            [ 'id_product' => 15, 'active' => 1, 'name' => 'Producto 15' ],
            [ 'id_product' => 16, 'active' => 0, 'name' => 'Producto 16' ],
            [ 'id_product' => 17, 'active' => 1, 'name' => 'Producto 17' ],
            [ 'id_product' => 18, 'active' => 0, 'name' => 'Producto 18' ],
            [ 'id_product' => 19, 'active' => 1, 'name' => 'Producto 19' ]
        ];
    }

    /**
     * Obtiene todas las categorías de la web
     * 
     * Esto es una consulta ficticia
     * 
     * @return Array
     */
    public static function getAllCategories()
    {
        return [
            [ 'id_category' => 1, 'active' => 1, 'name' => 'Categoría 1' ],
            [ 'id_category' => 2, 'active' => 0, 'name' => 'Categoría 2' ],
            [ 'id_category' => 3, 'active' => 0, 'name' => 'Categoría 3' ],
            [ 'id_category' => 4, 'active' => 0, 'name' => 'Categoría 4' ],
            [ 'id_category' => 5, 'active' => 1, 'name' => 'Categoría 5' ],
            [ 'id_category' => 6, 'active' => 1, 'name' => 'Categoría 6' ],
            [ 'id_category' => 7, 'active' => 1, 'name' => 'Categoría 7' ],
            [ 'id_category' => 8, 'active' => 0, 'name' => 'Categoría 8' ],
            [ 'id_category' => 9, 'active' => 0, 'name' => 'Categoría 9' ],
            [ 'id_category' => 10, 'active' => 1, 'name' => 'Categoría 10' ],
            [ 'id_category' => 11, 'active' => 0, 'name' => 'Categoría 11' ],
            [ 'id_category' => 12, 'active' => 0, 'name' => 'Categoría 12' ],
            [ 'id_category' => 13, 'active' => 1, 'name' => 'Categoría 13' ],
            [ 'id_category' => 14, 'active' => 1, 'name' => 'Categoría 14' ],
            [ 'id_category' => 15, 'active' => 1, 'name' => 'Categoría 15' ],
            [ 'id_category' => 16, 'active' => 0, 'name' => 'Categoría 16' ],
            [ 'id_category' => 17, 'active' => 1, 'name' => 'Categoría 17' ],
            [ 'id_category' => 18, 'active' => 0, 'name' => 'Categoría 18' ],
            [ 'id_category' => 19, 'active' => 1, 'name' => 'Categoría 19' ]
        ];
    }

    /**
     * Obtiene todos los usuarios de la web
     * 
     * Esto es una consulta ficticia
     * 
     * @return Array
     */
    public static function getAllUsers()
    {
        return [
            [ 'id_user' => 1, 'active' => 1, 'name' => 'Usuario 1' ],
            [ 'id_user' => 2, 'active' => 0, 'name' => 'Usuario 2' ],
            [ 'id_user' => 3, 'active' => 1, 'name' => 'Usuario 3' ],
            [ 'id_user' => 4, 'active' => 1, 'name' => 'Usuario 4' ],
        ];
    }
}
