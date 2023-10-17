<?php

include_once ("connection/connection.php");

if (isset($_POST['submitTweet'])) {
    $userId = $_SESSION["usuario"]['id'];
    $tweet = isset($_POST["tweet"]) ? mysqli_real_escape_string($connect, $_POST["tweet"]) : false;

    $sql = "INSERT INTO publicacion VALUES(null, '$userId', '$tweet', CURDATE())";
        $guardar = mysqli_query($connect, $sql);
}

header("Location: ../timeline.php");

?>