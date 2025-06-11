<?php
    //Leer
    $user = $_POST["usuario"];
    $contra = $_POST["password"];

    //Validar Usuario
    if ( $user == "magno" && $contra == "fotos123" )
    {
        session_start();
        $_SESSION["admin"] = "foto";
        header('Location: tablero.php');
    }
    else
    {
        header('Location: index.php');
    }
    
?>