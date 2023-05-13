<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arroces</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="stylesMobile.css">
    <link rel="stylesheet" href="fontawesome/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="img/logo_WPD_22.ico">
</head>

<body class="bodyContacto">
  <header>
        <button class="abrir" onclick="abrirHamburguesa()"><i class="bi bi-list"></i></i></button>
        <nav class="barraNav">
            <ul class="abierto">
                <button class="cerrar" onclick="cerrarHamburguesa()"><i class="bi bi-x-lg"></i></button>
                <div>
                    <a href="index.php">
                        <li class="elementoBarra">Inicio</li>
                    </a>
                </div>
                <div>
                    <a href="tienda.php">
                        <li class="elementoBarra">Tienda</li>
                    </a>
                </div>
                <div>
                    <a href="#restaurantes">
                        <li class="elementoBarra">Restaurantes</li>
                    </a>
                </div>
                <div class="login">
                    <li>
                        <a href="contacto.php">
                    <li class="elementoBarra">Login</li>
                    </a>
                    <p class="barrasiete" style="margin: 0;"> / </p>
                    <a href="registro.php">
                        <li class="elementoBarra">Sign up</li>
                    </a>
                    </li>
                </div>
            </ul>
        </nav>
        <div>
            <img class="logoHeader" src="img/arroces-y-punto-blanco.png" alt="">
        </div>
        <div>
            <a href="#historia"><img class="flecha"
                    src="img/png-transparent-arrow-computer-icons-logo-white-down-arrow-miscellaneous-angle-rectangle.png"
                    alt=""></a>
        </div>
        <div class="imHeader">
            <img class="imagenFondo" src="img/sandy-ravaloniaina-rARwqh9IXEE-unsplash.jpg" alt="">
        </div>
    </header>
    <main class="mainContacto">
        <!-- <div class="imHeader">
            <img class="imagenFondo" src="img/sandy-ravaloniaina-rARwqh9IXEE-unsplash.jpg" alt="">
        </div> -->
        <div class="formulario">
            <form class="contenedor">
                <div class="inputSpan">
                <p><input name="email" class="input" type="email" placeholder="Correo electronico" onkeydown="letras('email',0)"></p>
                <span></span>
                </div>
                <div class="inputSpan">
                <p><input class="input" type="password" placeholder="Contraseña"></p>
                <span></span>
                </div>
                <div class="inputSpan">
                    <button id="boton" type="submit">Iniciar sesión</button>
                </div>
            </form>
        </div>
    </main>
    <script src="app.js"></script>
</body>

</html>