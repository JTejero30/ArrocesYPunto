<?php
require_once ('../../Database.php');

$datos = [$_POST['nombre'],$_POST['descripcion'], $_POST['precio'], $_POST['categoria']];

Database::saveTienda($datos);

header('Location: ../../admin.php');

?>