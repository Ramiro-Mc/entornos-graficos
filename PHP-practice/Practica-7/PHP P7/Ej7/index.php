<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])) { 

   $conexion = mysqli_connect("localhost", "root", "", "carrito");
    if (!$conexion) {
            die("Conexión fallida: " . mysqli_connect_error());
        }

    $id = $_POST['id'];

    $resultado = mysqli_query($conexion, "SELECT * FROM productos WHERE id = '$id'");

    $fila = mysqli_fetch_assoc($resultado);

    mysqli_close($conexion);

    if($fila){
        $conexion = mysqli_connect("localhost", "root", "", "carrito");

        if (!$conexion) {
            die("Conexión fallida: " . mysqli_connect_error());
        }
        $id = $fila['id'];
        $nombre = $fila['nombre'];
        $precio = $fila['precio'];
        mysqli_query($conexion, "INSERT INTO carrito (idproducto,nombre,precio) VALUES ('$id', '$nombre', '$precio')");
        mysqli_close($conexion);
    }else{
        echo "No se encontró ningún producto con el ID proporcionado.";
    }
}
?>

<form action="" method="post">
    ID de Producto a agregar: <input type="number" name="id">
    <input type="submit" value="Agregar">
</form>

<?php
echo 'Carrito:';
$conexion = mysqli_connect("localhost", "root", "", "carrito");

$resultado = mysqli_query($conexion, "SELECT * FROM carrito");

while($fila = mysqli_fetch_assoc($resultado)){
    echo "Producto numero: " .($fila['idcarrito']) . "<br>";
    echo "ID: " .($fila['idproducto']) . "<br>";
    echo "Nombre: " .($fila['nombre']) . "<br>";
    echo "Precio: " .($fila['precio']) . "<br>";
}