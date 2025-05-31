<?php
session_start(); 
if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 0; 
} else {
    $_SESSION["contador"]++; 
}
// Muestra el contador
echo "Contador de visitas: " . $_SESSION["contador"] . "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="formulario.php">formulario</a>
    <a href="recomendar.php">recomendar</a>
    <a href="logout.php">reiniciar contador</a>
</body>
</html>
