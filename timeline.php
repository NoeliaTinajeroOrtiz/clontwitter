<?php
include_once ("connection/connection.php");
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>

    <meta charset="UTF-8">
    <meta name="description" content="Este es un ejemplo crud">
    <meta name="keywords" content="html, css, bootstrap, js, portfolio, proyectos, php">
    <meta name="language" content="EN">
    <meta name="author" content="noelia.tinajero@a.vedrunasevillasj.es">
    <meta name="robots" content="index,follow">
    <meta name="revised" content="Tuesday, February 28th, 2023, 23:00pm">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome1">

    <!-- Añado la fuente Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"
        defer></script>

    <!-- Titulo -->
    <title>Clon Twitter</title>

</head>

<body>

    <nav class="navbar navbar navbar-dark bf-info" style="height: 10vh;">
        <a class="navbar-brand mx-2">ClonTwitter</a>
        <a class="nav-link text-white" href="?q=a">All</a>
        <a class="nav-link text-white" href="timeline.php">Follow</a>
        <a href="../sessionSample/logout.php">Logout</a>
    </nav>
    <div id="subBody" class="container-fluid d-flex justify-content-center pt-5" style="min-height: 90vh;">
    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">noeliatinajero</h5>
              <p class="card-text">Noelia Tinajero Prueba</p>
              <p class="card-text"><small class="text-muted">Created 2023-10-10</small></p>
            </div>

        <form action="publicar.php" method="POST" class="mt-2">
          <div class="row g-3 mt-2 mx-auto">
            <label for="tweet" class="form-label text-primary">Tweet: </label> <br>
            <textarea id="tweet" class="form-control text-info mt-2 w-10" name="tweet" placeholder="Escribe el tweet..." rows="5" cols="40" required=""></textarea>
            <input id="sendTweet" class="btn btn-primary btn-lg" type="submit" value="Send" name="submitTweet">
          </div>
        </form>

        </div> 
    </div>
    <div class="container">
          </div>
  
  </div>



</body>

</html>