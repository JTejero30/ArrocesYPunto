<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arroces</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="stylesMobile.css">
    <link rel="stylesheet" href="stylesLogin.css">
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
                    <a href="index.php#recetas">
                        <li class="elementoBarra">Recetas</li>
                    </a>
                </div>
                <div class="login">
                    <li>
                    <?php
                        if(isset($_SESSION['user'])){
                            if($_SESSION['user']['rol_id'] == 2){
                                echo '<li class="elementoBarra">';
                                echo '<i class="bi bi-person"></i>';
                                echo $_SESSION['user']['nick'];
                                echo '</li>';
                                echo '<a href="logout.php">';
                                echo '<li class="elementoBarra"><i class="bi bi-box-arrow-right"></i></li>';
                                echo '</a>';
                            }else{
                                echo '<li class="elementoBarra">';
                                echo '<a href="admin.php" " target="_blank">';
                                echo '<i class="bi bi-table"></i>';
                                echo '</a>';
                                echo '</li>';
                                echo $_SESSION['user']['nick'];
                                echo '<a href="logout.php">';
                                echo '<li class="elementoBarra"><i class="bi bi-box-arrow-right"></i></li>';
                                echo '</a>';
                            }
                        }else{
                            echo '<a href="contacto.php">';
                            echo '<li class="elementoBarra">Login</li>';
                            echo '</a>';
                            echo '<p class="barrasiete" style="margin: 0;"> / </p>';
                            echo '<a href="registro.php">';
                            echo '<li class="elementoBarra">Sign up</li>';
                            echo '</a>';
                        }
                    ?>
                    </li>
                </div>
            </ul>
        </nav>
        <div>
            <img class="logoHeader" src="img/arroces-y-punto-blanco.png" alt="">
        </div>
        <div>
            <a href="#historia"><img class="flecha" src="img/png-transparent-arrow-computer-icons-logo-white-down-arrow-miscellaneous-angle-rectangle.png" alt=""></a>
        </div>
        <div class="imHeader">
            <img class="imagenFondo" src="img/sandy-ravaloniaina-rARwqh9IXEE-unsplash.jpg" alt="">
        </div>
    </header>
    <main class="mainRegistro">
        <div class="formulario">
            <form class="contenedor" action = "registrar.php" method="POST">
                <div class="inputSpan">
                    <label for="input" class="text">Nombre y apellido:</label>
                    <input name='nombre' class="input" type="text"  required onblur="validar('nombre',0,/^[a-zA-Z\s]+$/)">
                </div>
                <div class="inputSpan">
                    <label for="input" class="text">Usuario:</label>
                    <input name="nick" class="input" type="text"  required>
                </div>

                <div class="inputSpan">
                    <label for="input" class="text">Correo:</label>
                    <input name="email" class="input" type="email"  required onblur="validar('email',2,/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{1,}$/)">
                </div>

                <div class="inputSpan">
                <label for="input" class="text">Contraseña:</label>

                    <input id='pass1' name="contraseña" class="input" type="password"  required onblur="validar('passw1',3,/^(?=.*[A-Z])(?=.*[a-z])(?=.*[\W_]).{8,}$/)">
                </div>
                <div class="inputSpan">
                <label for="input" class="text">Confirmar contraseña:</label>
                    <input id='pass2' name="confirmar" class="input" type="password" required onkeyup="contraseñaCoincide('pass1',value,'confirmar',4)">
                </div>
                <label class="containercheck">
                    <input type="checkbox" required>Aceptar las condiciones
                    <svg viewBox="0 0 64 64" height="2em" width="2em">
                        <path d="M 0 16 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 16 L 32 48 L 64 16 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 16" pathLength="575.0541381835938" class="path"></path>
                    </svg>
                </label>
                <button class="learn-more">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Registrarse</span>
                </button>
            </form>
        </div>
    </main>
    <script src="app.js"></script>
</body>

</html>