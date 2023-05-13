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
    <main class="mainRegistro">
        <div class="formulario">
            <form class="contenedor">
                <div class="inputSpan">
                    <input name='nombre' class="input" type="text" placeholder="Nombre" required
                    onkeyup="validar('nombre',0,/^[A-Za-z]*$/)">
                    <span></span>
                </div>

                <div class="inputSpan">
                    <input name="apellidos" class="input" type="text" placeholder="Apellidos"
                        onkeyup="validar('apellidos',1,/^[A-Za-z]*$/)">
                    <span></span>
                </div>

                <div class="inputSpan">
                    <input class="input" type="text" placeholder="Nombre de usuario" required>
                    <span></span>
                </div>

                <div class="inputSpan">
                    <input name="email" class="input" type="email" placeholder="Correo electronico" required
                    onkeyup="validar('email',3,/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{1,}$/)">
                    <span></span>
                </div>

                <div class="inputSpan">
                    <input name="passw1" class="input" type="password" placeholder="Contraseña" required
                    onkeyup="validar('passw1',4,/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{8,}$/)">
                    <span></span>
                </div>
                <div class="inputSpan">
                    <input name="passw2" class="input" type="password" placeholder="Confirmar contraseña" required onkeyup="contraseñaCoincide('passwd','passw2')">
                    <span></span>

                </div>
                <div class="checkbox">
                    <input id="check" type="checkbox" required>Aceptar las condiciones

                </div>
                <button id="boton" type="submit">Registrarse</button>
            </form>
        </div>
    </main>
    <script src="app.js"></script>
</body>

</html>