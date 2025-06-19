<?php
setcookie('seleccion', '', time() - 3600); 
header("Location: index.php");
exit();
?>