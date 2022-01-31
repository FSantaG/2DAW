<!--Crea el archivo en el mismo directorio-->
<?php
    $nomfich1="modulos.txt";
    $fich1=fopen($nomfich1,"a+");//a+ para añadir información al final del fichero. Si no existe, se crea el fichero.
    $dato="dwes;9\n";
    fputs($fich1,$dato);//Escribe un nuevo registro
    $dato="dwec;8\n";
    fwrite($fich1,$dato);
    fclose($fich1);
?>
<!--Crea el archivo en otro directorio-->
<!--NOTA: Usar backslash (\) -->
<?php
    $nomfich1="d:\servidor\archivos_prueba\modulos.txt";
    $fich1=fopen($nomfich1,"a+");//a+ para añadir información al final del fichero. Si no existe, se crea el fichero.
    $dato ="dwes 9".PHP_EOL;//PHP_EOL es una predefinida que salta de línea.
    fputs($fich1,$dato);//Escribe un nuevo registro
    $dato="dwec 8".PHP_EOL;
    fwrite($fich1,$dato);
    fclose($fich1);
?>