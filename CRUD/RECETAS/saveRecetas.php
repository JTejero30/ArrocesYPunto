<?php
require_once ('../../Database.php');

$datos = [$_POST['nombre'],$_POST['descripcion']];

Database::saveRecetas($datos);

header('Location: ../../admin.php');

?>