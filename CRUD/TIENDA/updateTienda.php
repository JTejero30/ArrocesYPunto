<?php
require_once ('../../Database.php');

$datos = [$_POST['id'],$_POST['nombre'],$_POST['descripcion'], $_POST['precio'], $_POST['categoria']];

Database::updateTienda($datos);

header('Location: ../../admin.php');

?>