<?php

require_once('Database.php');

$bd = Database::conectarBD('mysql', 'tfg2022imf', 'mysql-5706.dinaserver.com', '3306', 'admintfg22', 'Morcilla01.');

session_start();
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
    <link rel="stylesheet" href="tienda.css">
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
                <button class="botonPaella button">Paellas</button>
                <button class="botonUtensilio button">Utensilios</button>
                <button class="botonArroz button">Arroces</button>
            </div>
            <div class="rangoPrecio">
                <span>Min 0</span>
                <?php
                Database::precioMax($bd) // hace un input de range y coge el maximo precio de la bd  para que siempre se vea algun producto
                ?>
                <span class="valorMaximo"></span>
            </div>
            <!-- <input type="text" name="search" id="buscador" placeholder="Buscar producto..."> -->
            <div class="group">
                <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                    <g>
                        <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
                    </g>
                </svg>
                <input placeholder="Buscar productos..." type="search" class="input" name="search" id="buscador" >
            </div>
        </div>
        <section class="cardsProducto">
            <?php
            Database::mostrarCards($bd, 'select * from 3_tienda');
            ?>

        </section>
    </main>
    <footer>

    </footer>
    <script src="app.js"></script>
    <script src="appTienda.js"></script>
</body>

</html>