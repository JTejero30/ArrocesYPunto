<?php
require_once ('../../Database.php');

$datos = [$_POST['nombre'],$_POST['descripcion']];

Database::saveCursos($datos);

header('Location: ../../admin.php');

?>