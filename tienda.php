<?php

    require_once('Database.php');

$bd = Database::conectarBD('mysql', 'arrocesypunto', 'localhost', '3306', 'root', '');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="author" content="MiguelJavier">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="img/logo_WPD_22.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="stylesMobile.css">
    <title>Arroces Tienda Online</title>
</head>

<body class="">
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
        <div> <!-- solo visible en formato pequeño-->
            <img class="logoHeaderMobile" src="img/arroces-y-punto-blanco.png" alt="">
        </div>
    </header>
    <main>
        <div>
            <div class="imagentienda"></div>
            <h2 class="txtTienda">Shop</h2>
        </div>
        <div class="buscador">
            
            <div>
                <button class="botonPaella">Paellas</button>
                <button class="botonUtensilio">Utensilios</button>
            </div>
            <div class="rangoPrecio">
                <span>Min 0</span>
                <?php
                Database::precioMax($bd) // hace un input de range y coge el maximo precio de la bd  para que siempre se vea algun producto
                ?>                     
                <span class="valorMaximo"></span>
            </div>
            <input type="text" name="search" id="" placeholder="Buscar producto...">
        </div>    
        <section class="cardsProducto">
            <?php
            Database::mostrarCards($bd, 'select * from tienda');
            ?>

        </section>
    </main>
    <footer>

    </footer>
    <script src="app.js"></script>
    <script src="appTienda.js"></script>
</body>

</html>