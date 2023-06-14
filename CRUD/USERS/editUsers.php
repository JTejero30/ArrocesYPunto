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
    <form action="updateUsers.php" method="POST">
        <div class="inputSpan">
            <input type="hidden" name="id" value="<?php echo $resultado['id'] ?>">
        </div>
        <div class="inputSpan">
            <input type="text" name="nick" value="<?php echo $resultado['nick'] ?>" placeholder="Actualiza el nick">
        </div>
        <div class="inputSpan">
            <input type="text" name="f_nacimiento" value="<?php echo $resultado['f_nacimiento'] ?>" placeholder="Actualiza la fecha">
        </div>
        <div class="inputSpan">
            <input type="text" name="contraseña" value="<?php echo $resultado['contraseña'] ?>" placeholder="Actualiza la contraseña">
        </div>
        <div class="inputSpan">
            <input type="text" name="email" value="<?php echo $resultado['email'] ?>" placeholder="Actualiza el email">
        </div>
        <div class="inputSpan">
            <input type="text" name="rol_id" value="<?php echo $resultado['rol_id'] ?>" placeholder="Actualiza el rol">
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