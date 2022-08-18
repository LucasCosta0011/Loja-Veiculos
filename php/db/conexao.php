<?php

$dblocal = "localhost";
$dbname = "loja_veiculos";
$dbuser = "root";
$dbpass = ""; 

$conex = mysqli_connect($dblocal, $dbuser, $dbpass, $dbname) or trigger_error(mysqli_error(), E_USER(ERROR));

?>