<?php

include_once ("connection/connection.php");

if (isset($_GET["id"])) {    
    
    $id = $_GET['id'];
    $nombre = $_GET['username'];
    $userId = $_SESSION["usuario"]['id'];

    $sql = "INSERT INTO seguidores VALUES(null, '$userId', '$nombre' , '$tweet' , CURDATE())";
    $guardar = mysqli_query($connect, $sql);
}

header("Location: ../timeline.php");


?>


