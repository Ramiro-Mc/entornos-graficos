<?php
session_start(); 

unset($_SESSION);

header('location: index.html'); exit();

session_destroy();

?>