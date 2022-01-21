<?php
Class Alumno{
    private $id;
    private $nombre;
    private $edad;
    private $id_curso;

    function __construct($id, $nombre, $edad, $id_curso){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->id_curso=$id_curso;
    }
    function __get($atrib){
        return $this->$atrib;
    }
}
?>