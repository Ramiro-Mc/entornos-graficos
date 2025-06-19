<?php
session_start();
echo "Nombre: " . $_SESSION["nombre"] . "<br>";
echo "Clave: " . $_SESSION["clave"] . "<br>";
?>