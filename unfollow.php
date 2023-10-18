<?php

include_once ("connection/connection.php");


if (isset($_GET["id"])) {    
    
    $userId = $_SESSION["usuario"]['id'];

    $sql = "DELETE FROM seguidores WHERE userId = $userId";
    $borrar = mysqli_query($connect, $sql);
}

header("Location: ../timeline.php");


?>