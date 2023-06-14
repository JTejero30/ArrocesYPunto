<?php

    $email = $_POST['email'];
    $contraseña = $_POST['passw1'];
    

    require_once('Database.php');

    $resultado = Database::login($email, $contraseña);
    
    if($resultado == null){
        echo 'No funciona';
    }else{
        if($resultado['rol_id']==1){
            session_start();
            $_SESSION['user'] = $resultado;
            header('Location: index.php');
        }else if($resultado['rol_id']==2){
            session_start();
            $_SESSION['user'] = $resultado;
            header('Location: index.php');
        }else{
            header('Location: contacto.php');
        }
    }

?>