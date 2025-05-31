<?php

session_start();
$_SESSION["contador"]++;
echo "Contador de visitas: " . $_SESSION["contador"] . "<br>";

echo"<pre>";
print_r($_GET);  
echo"</pre>"; 


$to = $_GET['to'];
$subject = $_GET['subject'];
$message = $_GET['message'];
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n"; 
$headers .= "From: " . $_GET['from'] . "\r\n"; 


if(mail($to, $subject, $message, $headers)) {
    echo "Correo enviado correctamente a" . $_GET['to'] . ".";
    echo "<br> <br> A " . $to . " ";
} else {
    echo "Error al enviar el correo a" . $_GET['to'] . ".";;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">volver</a>
</body>
</html>