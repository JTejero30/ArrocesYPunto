<?php
require_once ('../../Database.php');

$datos = [$_POST['id'],$_POST['nick'],$_POST['f_nacimiento'], $_POST['contraseña'], $_POST['email'], $_POST['rol_id']];

Database::updateUsers($datos);

header('Location: ../../admin.php');

?>