<?php
session_start();
$_SESSION["nombre"] = $_POST["nombre"];
$_SESSION["clave"] = $_POST["clave"];
header("Location: mostrar.php");
exit();
?>