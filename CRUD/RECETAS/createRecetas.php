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
    <form action="saveRecetas.php" method="POST">
        <div class="inputSpan">
            <input type="text" name="nombre" placeholder="Inserta un nombre">
        </div>
        <div class="inputSpan">
            <input type="text" name="descripcion" placeholder="Inserta una descripcion">
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