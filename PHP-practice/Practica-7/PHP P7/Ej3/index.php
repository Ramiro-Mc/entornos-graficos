<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['nombre'])) { 
    $nombre = $_POST['nombre'];
    setcookie("nombre", $nombre);
    header("Location: " . $_SERVER['PHP_SELF']); // Redirige para evitar el reenvío del formulario
    //Osea , al redirigir se corta el POST y se empieza una carga limpia con el GET. Si guardas la cookie, podes mostrar el nombre sin POST
    //Por eso no se usa abajo $_POST['nombre'] ya que no existe


    //Cuando haces la redirección (header("Location: ...")), se pierde la información del POST porque el navegador hace una nueva petición GET.

    //Entonces, si la persona aprieta F5 (actualiza), no se reenvían los datos del formulario 
    //porque ahora está cargando la página con GET, no con POST.
    //La pagina se carga predeterminadamente con GET (siempre).

    //Si no haces la redirección, y el usuario aprieta F5, el navegador intenta reenviar el formulario (la petición POST), 
    //y puede causar que los datos se envíen dos veces o que salga el mensaje de confirmación de reenvío.
    exit();
}


if(isset($_COOKIE['nombre'])){
    $nombre = $_COOKIE['nombre'];
    // setcookie('nombre', $nombre);
    echo "Hola $nombre, bienvenido de nuevo!";
}else{
    setcookie('nombre', "");
    echo "Primera visita de la pagina";
}
?>

<form action="" method="POST">
    Ingrese su nombre:
    <input type="text" name="nombre" required>
    <br>
    <input type="submit" value="Enviar">
</form>