<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases</title>
</head>

<body>
    <h1>Ejercicio 1</h1>
    <?php
    class Alumno1
    {
        public $num_matrícula;
        public $nombre;
        public $edad;
        public static $tasa_matricula = 2;

        /* public function __construct($num_matrícula, $nombre, $edad){
                $this->num_matrícula= $num_matrícula;
                $this->nombre = $nombre;
                $this->edad = $edad;
            } */
        public function importe_matricula()
        {
            if ($this->edad > 18) {
                $precio_matricula = $this->tasa_matricula;
            } else {
                $precio_matricula = 0;
            }
            echo "El precio de la matrícula es de $precio_matricula euros";
        }
    }

    $pepe = new Alumno1(172839, "Pepe", 19);
    $pepe->importe_matricula();

    /*CÓDIGO REAL:
        
        <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <?php
        include ("clases.inc");
        $pepe=new Alumno1(172839, "Pepe", 19);
        $pepe->importe_matricula();
    ?>
</body>
</html>
        */
    ?>
    <h1>Ejercicio 2</h1>
    <?php

    ?>
    <h1>Ejercicio 3</h1>
    <?php
    class Alumno
    {
        public $nombre;
        public $edad;
        public $calif_final;
        const CICLO = "DAW";

        public function __construct($nombre, $edad, $calif_final)
        {
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->calif_final = $calif_final;
        }
        public function supera_curso()
        {
        }
    }

    class Primero extends Alumno
    {
        function __construct($nombre, $edad, $calif_final)
        {
            parent::__construct($nombre, $edad, $calif_final);
        }
        function supera_curso()
        {
            if ($this->calif_final >= 5) {
                return "pasa a segundo";
            } else {
                return "repite primero";
            }
        }
    }

    class Segundo extends Alumno
    {
        public $calif_fct;
        public $calif_proyecto;
        function __construct($nombre, $edad, $calif_final, $calif_fct, $calif_proyecto)
        {
            parent::__construct($nombre, $edad, $calif_final);
            $this->calif_proyecto = $calif_proyecto;
            if ($calif_fct == "apto" || $calif_fct = "no apto") {
                $this->calif_fct = $calif_fct;
            } else {
                $this->calif_fct = "no apto";
            }
        }
        function supera_curso()
        {
            if ($this->calif_final >= 5 && $this->calif_fct == "apto" && $this->calif_proyecto >= 5) {
                return "aprueba el grado";
            } else {
                return "repite segundo";
            }
        }
    }

    $manolo = new Primero("Manolo", 20, 4);
    echo ("El alumno  <b>$manolo->nombre</b> cuya edad es de <b> $manolo->edad</b> años <b>");
    echo ($manolo->supera_curso());
    echo ("</b><br>");

    $pepe = new Segundo("Pepe", 27, 10, "apto", 10);
    echo ("El alumno  <b>$pepe->nombre</b> cuya edad es de <b> $pepe->edad</b> años <b>");
    echo ($pepe->supera_curso());
    echo ("</b> <br>");
    ?>
</body>

</html>