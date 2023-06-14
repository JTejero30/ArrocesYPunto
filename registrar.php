<?php
require_once ('Database.php');

$datos = [$_POST['nick'],'0000-00-00', $_POST['contraseña'], $_POST['email'], 2];

Database::comprobar($datos);
?>