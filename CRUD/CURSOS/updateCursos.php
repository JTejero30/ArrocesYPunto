<?php
require_once ('../../Database.php');

$datos = [$_POST['id'],$_POST['nombre'],$_POST['descripcion']];

Database::updateCursos($datos);

header('Location: ../../admin.php');

?>