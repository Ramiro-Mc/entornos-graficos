<?php

include_once "funciones.php";

if(!empty($_POST['ciudad']) AND !empty($_POST['pais'])){
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    $tieneMetro = isset($_POST['tieneMetro']) ? 1 : 0;

    consultaSQL("INSERT INTO ciudades (ciudad,pais,habitantes,superficie,tieneMetro) VALUES ('$ciudad', '$pais', $habitantes, $superficie, $tieneMetro)");
}

$resultados = consultaSQL("SELECT * FROM ciudades");

if(!empty($resultados)){

    echo "<table border='1' style='width:100%'>";
    echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>ciudad</th>";
        echo "<th>pais</th>";
        echo "<th>habitantes</th>";
        echo "<th>superficie</th>";
        echo "<th>tieneMetro</th>";
        echo "<th>Opciones</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($resultados)) {
        echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['ciudad'] . "</td>";
            echo "<td>" . $row['pais'] . "</td>";
            echo "<td>" . $row['habitantes'];
            echo "<td>" . $row['superficie'];
            echo "<td>" . $row['tieneMetro'];
            echo "<td>";
                echo "<a href='editar.php? id=" . $row['id'] . "'>Editar</a> | "; 
                echo "<a href='eliminar.php? id=" . $row['id'] . "'>Eliminar</a>";
            echo "</td>";
        echo "</tr>";
    }

    echo "</table>";

}

?>

<form action="" method="post">

    <h2>Nueva ciudad:</h2>
    ciudad: <input type="text" name="ciudad"><br>
    Pais: <input type="text" name="pais"><br>
    Habitantes: <input type="number" name="habitantes"><br>
    superficie: <input type="number" name="superficie"><br>
    tieneMetro: <input type="checkbox" name="tieneMetro"><br>
    <input type="submit" value="Agregar">

</form>
