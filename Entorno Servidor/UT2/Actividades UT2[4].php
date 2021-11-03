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
        class Alumno{
            public $num_matrícula;
            public $nombre;
            public $edad;
            public static $tasa_matricula=2;

            /* public function __construct($num_matrícula, $nombre, $edad){
                $this->num_matrícula= $num_matrícula;
                $this->nombre = $nombre;
                $this->edad = $edad;
            } */
            public function importe_matricula(){
                if ($this->edad>18){
                    $precio_matricula=$this->tasa_matricula;
                }else{
                    $precio_matricula=0;
                }
                echo "El precio de la matrícula es de $precio_matricula euros";
            }
        }

        $pepe=new Alumno(172839, "Pepe", 19);
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
        $pepe=new Alumno(172839, "Pepe", 19);
        $pepe->importe_matricula();
    ?>
</body>
</html>
        */
    ?>
</body>
</html>