<?php

if(isset($_COOKIE['contador'])){ //Ya esta seteada la cookie de contador?
    $contador = $_COOKIE['contador'] + 1;
    setcookie('contador', $contador); // Actualiza el contador en la cookie
    echo "Has visitado la pagina $contador veces.";

} else {
    setcookie('contador', 1); // Crea la cookie por primera vez
    echo  "Bienvenido a la pagina, es tu primera visita.";
}

?>