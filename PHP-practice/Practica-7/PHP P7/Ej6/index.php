
<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['mail'])) { 

   $conexion = mysqli_connect("localhost", "root", "", "ej6");

    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    
    $mail = $_POST['mail'];

    $resultado = mysqli_query($conexion, "SELECT nombre FROM alumnos WHERE mail = '$mail'"); 

    $fila = mysqli_fetch_assoc($resultado);

    if ($fila) {
        $nombre = $fila['nombre'];
        $_SESSION['nombre'] = $nombre;
        header("Location: bienvenida.php");
        exit();
    } else {
        echo "No se encontró ningún alumno con el mail proporcionado.";
    }

}

?>

<form action="" method="POST">
    Ingrese mail del alumno a buscar: <input type="email" name="mail">
    <input type="submit" value="Ingresar">
</form>