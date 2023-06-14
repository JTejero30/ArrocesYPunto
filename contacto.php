<?php
session_start();

// 1. Comprobar si la session esta iniciada
if(isset($_SESSION['user'])){
    header('Location: index.php');
}
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
                                echo '<a href="admin.php" " target="_blank">';
                                echo '<i class="bi bi-table"></i>';
                                echo '</a>';
                                echo '<li class="elementoBarra">';
                                echo $_SESSION['user']['nick'];
                                echo '</li>';
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
            <form class="contenedor" action="comprobar.php" method="post">

                <div class="inputSpan">
                    <label for="input" class="text">Correo:</label>
                    <input name="email" class="input" type="email" required onblur="validar('email',2,/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{1,}$/)">
                </div>
                <div class="inputSpan">
                    <label for="input" class="text">Contraseña:</label>
                    <input name="passw1" class="input" type="password" required onblur="validar('passw1',3,/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{8,}$/)">
                </div>
                <button class="learn-more">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Iniciar sesion</span>
                </button>
            </form>
        </div>
    </main>
    <script src="app.js"></script>
</body>

</html>