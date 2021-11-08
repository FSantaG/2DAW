<?php
include_once('commun.inc.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
  <meta charset="utf-8" />
  <title>Inicio</title>
  <style>
    table {
      border-collapse: collapse;
    }

    table,
    td,
    th {
      border: 1px solid black;
    }

    td,
    th {
      padding: 4px;
    }
  </style>
</head>

<body>
  <div>
    <!-- Mostrar la tabla de autores. -->
    <table>
      <tr>
        <th>Autores</th>
      </tr>
      <?php
      foreach ($autores as $numero => $autor) {
        echo "<tr><td><a href=\"autor.php?numero=$numero\">$autor</a></td></tr>";
      }
      ?>
    </table>
  </div>
</body>

</html>