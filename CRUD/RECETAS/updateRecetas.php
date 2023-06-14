<?php
require_once ('../../Database.php');

$datos = [$_POST['id'],$_POST['nombre'],$_POST['descripcion']];

Database::updateRecetas($datos);

header('Location: ../../admin.php');

?>