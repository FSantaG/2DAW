<?php
session_start();
echo "Constante SID: ", SID;
echo "<br>".$_SESSION["nombre"];
?>