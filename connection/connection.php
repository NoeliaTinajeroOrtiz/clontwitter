<?php

$host = "localhost:3306";
$user = "root";
$pass = "root";

$bd = "usuarios_twitter";

$connect=mysqli_connect($host, $user, $pass);

mysqli_select_db($connect, $bd);

session_start();



?>