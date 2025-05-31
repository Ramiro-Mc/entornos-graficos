<?php
session_start();
$_SESSION["contador"]++; 
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
    
    <form action="correo.php" method="GET">

        <input type="hidden" name="to" value="ramiromc04@gmail.com">

        <label for="from">Tu mail:</label>
        <input type="email" id="from" name="from" required><br><br>

        <label for="subject">Asunto:</label>
        <input type="text" id="subject" name="subject" required><br><br>

        <label for="message">Mensaje:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

        <button type="submit">Enviar Correo</button>
    </form>

    <a href="index.html">volver</a>


</body>
</html>