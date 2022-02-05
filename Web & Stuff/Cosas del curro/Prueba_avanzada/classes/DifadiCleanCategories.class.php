<?php
/**
 * Prueba de acceso de Difadi.com
 * Clase de limpieza de categorías
 */

class DifadiCleanCategories implements DifadiScript
{
    /**
     * Teniendo en cuenta una base de datos ficticia llamada "tienda", en la
     * cual existe una tabla llamada 'ps_category' con los siguientes campos:
     *  - id_category
     *  - active
     *  - name
     * 
     * Ejecutar una consulta SQL para borrar todas las categorías que tengan
     * el campo 'active' a '0'
     * 
     * Una vez ejecutado ese comando, mostrar por pantalla el resultado de la
     * operación.
     * 
     * Para este ejercicio se deben de utilizar las funciones que aporta este
     * pequeño proyecto. Recomiendo leerse todas las clases antes de empezar 
     * a programar.
     * 
     * Este script dará error hasta que se solucione un problema con una de las
     * interfaces del proyecto
     * 
     * Cualquier duda, consultar a <lsantos@difadi.com> o <soporte@difadi.com>
     */
    public $consulta;
    public function run(){
        $this->consulta = DifadiTools::getAllCategories();
        $counter = 0;
        foreach($this->consulta as $category){
            if($category["active"] == 0){
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
