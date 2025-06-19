<?php

if (isset($_COOKIE['seleccion'])) { //Luego de llenar el formulario la cookie sigue siendo vacia, se crea despues
    $seleccion = $_COOKIE['seleccion'];
} else {
    $seleccion = null;
}


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['seleccion'])) { 
    $seleccion = $_POST['seleccion'];
    setcookie("seleccion", $seleccion); 
    header("Location: " . $_SERVER['PHP_SELF']); // Redirige para evitar el reenvío del formulario
    //Cuando entra aqui redirige a la misma pagina ya con la cookie creada, por lo tanto no va a entrar a este if esa 2da vez 
    //y solo va a entrar al if de la cookie que ya se ha creado 
    exit();
}

if (!$seleccion) {
    echo "<h3>Noticia politica</h3>";
    echo "<h3>Noticia Economica</h3>";
    echo "<h3>Noticia deportiva</h3>";
}
?>

<form action="" method="POST">
    Seleccione un tipo de noticia:
    <label><input type="radio" name="seleccion" value="politica" <?php if($seleccion==='politica') echo 'checked'; ?>> Política</label>
    <label><input type="radio" name="seleccion" value="economica" <?php if($seleccion==='economica') echo 'checked'; ?>> Económica</label>
    <label><input type="radio" name="seleccion" value="deportiva" <?php if($seleccion==='deportiva') echo 'checked'; ?>> Deportiva</label>
    <input type="submit" value="Seleccionar">
</form>

<?php

if ($seleccion) {
    if($seleccion == "politica"){
        echo '<h3>Noticia politica</h3>';
    } elseif($seleccion == "economica"){
        echo '<h3>Noticia economica</h3>';
    } else{
        echo '<h3>Noticia deportiva</h3>';
    }
}

?>
<br>
<a href="borrar_cookie.php">Borrar seleccion</a>