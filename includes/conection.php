<?php

$server   = "localhost";
$username = "root";
$password = "Entrar";
$database = "grupo_mas";
$db = mysqli_connect($server, $username, $password, $database);

mysqli_query($db, "SET NAMES 'uft8'");

if (!$db) {
  die('Could not connect: Error login to MYSQL ');
}

// inicia la sesion
// if (!isset($_SESSION)) {
//     session_start();
// }
  

// // DATOS REALES DE LA PAGINA 
// $server="localhost";
// $database = "id8596843_propiedades";
// $db_user = "id8596843_grupomas";
// $db_pass = "vigilante8";
