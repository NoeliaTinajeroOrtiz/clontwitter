<?php 

if (isset($_POST["submit"])) {
   
    require_once("connection/connection.php");
    #session_start();

    //Recoger los datos
    $username = isset($_POST["username"]) ? mysqli_real_escape_string($connect, $_POST["username"]) : false;
    $mail = isset($_POST["mail"]) ? mysqli_real_escape_string($connect, trim($_POST["mail"])) : false;
    $telefono = isset($_POST["telefono"]) ? mysqli_real_escape_string($connect, $_POST["telefono"]) : false;
    $descripcion = isset($_POST["descripcion"]) ? mysqli_real_escape_string($connect, $_POST["descripcion"]) : false;
    $pass = isset($_POST["password"]) ? mysqli_real_escape_string($connect, $_POST["password"]) : false;
    //var_dump($_POST);

    $arrayErrores = array();
    //Hacemos validadores necesarios
    if (!empty($username) && !is_numeric($username)) {
        $usernameValidado = true;
        

    } else {
        $usernameValidado = false;
        $arrayErrores["username"] = "El username no es valido";
        
    }

    if (!empty($mail) && filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $mailValidado = true;
        

    } else {
        $mailValidado = false;
        $arrayErrores["mail"] = "El mail no es valido";
        
    }
    if (!empty($telefono) && is_numeric($telefono)) {
        $telefonoValidado = true;
        

    } else {
        $telefonoValidado = false;
        $arrayErrores["telefono"] = "El telefono no es valido";
        
    }
    if (!empty($descripcion && !is_numeric($descripcion))) {
        $descripcionValidado = true;
        

    } else {
        $descripcionValidado = false;
        $arrayErrores["descripcion"] = "La descripción no es válida";
        
    }

    if (!empty($pass)) {
        $passValidado = true;
       

    } else {
        $passValidado = false;
        $arrayErrores["password"] = "El password no es valido";
        
    }

    $guardarUsuario = false;
    if(count($arrayErrores) == 0) {
        $guardarUsuario = true;
        
        $passSegura = password_hash($pass, PASSWORD_BCRYPT, ["cost" => 4]);
        //password_verify($pass, $passSegura);

        $sql = "INSERT INTO usuarios VALUES(null, '$username', '$mail','$telefono','$descripcion', '$passSegura', CURDATE());";
        $guardar = mysqli_query($connect, $sql);

        if ($guardar) {
            $_SESSION["completado"] = "Registro completado";
        } else {
            $_SESSION["errores"]["general"] = "Fallo en el registro";
        }
    } else {
        $_SESSION["errores"] = $arrayErrores;
    }
    header("Location: ../timeline.php");
}
?>