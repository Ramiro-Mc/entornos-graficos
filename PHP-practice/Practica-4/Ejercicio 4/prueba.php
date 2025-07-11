<?php
function comprobar_nombre_usuario($nombre_usuario){
    if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
        echo $nombre_usuario . " no es válido<br>";
        return false;
    }

    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
    for ($i=0; $i<strlen($nombre_usuario); $i++){
        if (strpos($permitidos, substr($nombre_usuario,$i,1)) === false){
            echo $nombre_usuario . " no es válido<br>";
            return false;
        }
    }

    echo $nombre_usuario . " es válido<br>";
    return true;
}

// PRUEBAS
comprobar_nombre_usuario("Ana");            
comprobar_nombre_usuario("Pepe!");          
comprobar_nombre_usuario("J");               
comprobar_nombre_usuario("Juan_Perez_1990"); 
comprobar_nombre_usuario("EsteNombreEsMuyLargoYNoVale"); 
?>