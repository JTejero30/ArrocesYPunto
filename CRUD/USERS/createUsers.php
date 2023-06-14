<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../stylesLogin.css">

</head>
<body>
    <form action = "saveUsers.php" method="POST">
    <div class="inputSpan">
        <input type="text" name="nick" placeholder = "Inserta un nick">
    </div>
    <div class="inputSpan">
        <input type="text" name="f_nacimiento" placeholder = "Inserta una f_nacimiento">
    </div>
    <div class="inputSpan">
        <input type="text" name="contraseña" placeholder = "Inserta una contraseña">
    </div>
    <div class="inputSpan">
        <input type="text" name="email" placeholder = "Inserta un email">
    </div>
    <div class="inputSpan">
        <input type="text" name="rol_id" placeholder = "Inserta un rol">
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