<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['estilo'])) { //Cuando mandas el formulario ambos son true
    //$_SERVER["REQUEST_METHOD"]  verfica que el formulario se ha enviado por POST, 
    //isset($_POST['estilo']) verifica que el campo 'estilo' existe en el formulario enviado
    $estilo = $_POST['estilo'];
} else {
    // Estilo por defecto
    $estilo = "claro";
}

?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 1</title>
        <link rel="stylesheet" href="<?php echo $estilo; ?>.css">
    </head>
    
    <body>

    <p>Selecciona un estilo: </p>
     <form action="index.php" method="POST">
        <select name="estilo">
            <option value="claro" <?php if ($estilo == 'claro') echo 'selected'; ?> >Claro</option>
            <option value="oscuro" <?php if ($estilo == 'oscuro') echo 'selected'; ?> >Oscuro</option>
            <option value="azul" <?php if ($estilo == 'azul') echo 'selected'; ?> >Azul</option>
        </select>
            <button type="submit">Aplicar</button>
     </form>
    
    </body>