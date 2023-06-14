<?php
require_once ('../../Database.php');

$datos = [$_POST['nick'],$_POST['f_nacimiento'], $_POST['contraseña'], $_POST['email'], $_POST['rol_id']];

Database::saveUsers($datos);

header('Location: ../../admin.php');

?>