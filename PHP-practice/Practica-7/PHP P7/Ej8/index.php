<?php
$conexion = mysqli_connect("localhost", "root", "", "prueba");

$resultados = [];
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['buscar'])) {
    $busqueda = mysqli_real_escape_string($conexion, $_POST['buscar']); 
    $sql = "SELECT * FROM buscador WHERE canciones LIKE '%$busqueda%'";
    $query = mysqli_query($conexion, $sql);
    while ($fila = mysqli_fetch_assoc($query)) {
        $resultados[] = $fila['canciones'];
    }
}
?>

<form method="POST">
    Buscar canción: <input type="text" name="buscar" required>
    <input type="submit" value="Buscar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (count($resultados) > 0) {
        echo "<h3>Resultados:</h3><ul>";
        foreach ($resultados as $cancion) {
            echo "<li>" . ($cancion) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "No se encontraron canciones.";
    }
}
?>