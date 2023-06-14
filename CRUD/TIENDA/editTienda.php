<?php
require_once('../../Database.php');

$id = $_GET['id'];
$tabla = $_GET['tabla'];

$resultado = Database::getById($id, $tabla);
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estiloform.css">
    <title>Document</title>
    <link rel="stylesheet" href="../../stylesLogin.css">


</head>

<body>
    <form action="updateTienda.php" method="POST">
        <div class="inputSpan">
            <input type="hidden" name="id" value="<?php echo $resultado['id'] ?>">
        </div>
        <div class="inputSpan">
            <input type="text" name="nombre" value="<?php echo $resultado['nombre'] ?>" placeholder="Actualiza el nombre">
        </div>
        <div class="inputSpan">
            <input type="text" name="descripcion" value="<?php echo $resultado['descripcion'] ?>" placeholder="Actualiza la descripcion">
        </div>
        <div class="inputSpan">
            <input type="text" name="precio" value="<?php echo $resultado['precio'] ?>" placeholder="Actualiza el precio">
        </div>
        <div class="inputSpan">
            <input type="text" name="categoria" value="<?php echo $resultado['categoria'] ?>" placeholder="Actualiza la categoria">
        </div>
        <button type="submit" class="learn-more">
            <span class="circle" aria-hidden="true">
                <span class="icon arrow"></span>
            </span>
            <span class="button-text">Enviar</span>
        </button>
    </form>

</body>

</html>