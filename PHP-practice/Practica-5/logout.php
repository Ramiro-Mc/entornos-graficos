<?php
session_start(); 

$_SESSION=[];

header('location: index.html'); exit();

session_destroy();

?>