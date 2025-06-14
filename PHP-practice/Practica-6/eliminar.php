<?php
include_once "funciones.php";

if (isset($_GET['id'])) { 
    $id = $_GET['id']; 
    consultaSQL("DELETE FROM ciudades WHERE id = $id");
}

header("Location: ciudades.php"); 
exit;
?>