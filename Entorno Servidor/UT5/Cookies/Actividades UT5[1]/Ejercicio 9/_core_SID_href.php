<?php
session_start();
require_once("./codigo_pag_580.php");
$_SESSION["nombre"]="Manolo";
?>
<a href="<?=url('cons_SID2_href.php')?>">Página 2 </a>