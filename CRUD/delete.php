<?php
    require_once('../Database.php');
    
    $id = $_GET['id'];
    $tabla = $_GET['tabla'];

    Database::delete($id, $tabla);

    header('Location:../admin.php');
?>