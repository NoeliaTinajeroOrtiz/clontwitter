<?php

include_once ("connection/connection.php");

// Obtener el ID del usuario que se quiere seguir
if (isset($_GET["id"])) {    
    
    $userId = $_SESSION["usuario"]['id'];

    $sql = "INSERT INTO seguidores VALUES(null, '$userId', $tweet' , CURDATE())";
    $guardar = mysqli_query($connect, $sql);
}

header("Location: ../timeline.php");


?>


