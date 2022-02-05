<?php
/**
 * Prueba de acceso de Difadi.com
 * Clase de limpieza de productos
 */

/**
 * Teniendo en cuenta una base de datos ficticia llamada "tienda", en la
 * cual existe una tabla llamada 'ps_product' con los siguientes campos:
 *  - id_product
 *  - active
 *  - name
 * 
 * Ejecutar una consulta SQL para borrar todos los producto que tengan
 * el campo 'active' a '0'
 * 
 * Una vez ejecutado ese comando, mostrar por pantalla el resultado de la
 * operación.
 * 
 * Para este ejercicio se deben de utilizar las funciones que aporta este
 * pequeño proyecto. Recomiendo leerse todas las clases antes de empezar 
 * a programar.
 * 
 * Cualquier duda, consultar a <lsantos@difadi.com> o <soporte@difadi.com>
 */
class DifadiCleanProducts implements DifadiScript
{
    public $consulta;
    public function run(){
        $this->consulta = DifadiTools::getAllProducts();
        $counter = 0;
        foreach($this->consulta as $product){
            if($product["active"] == 0){
                array_splice($this->consulta, $counter, 1);
            }
            else{
                $counter++;
            }
        }
    }
    public function getResult(){
        var_dump($this->consulta);
    }
}