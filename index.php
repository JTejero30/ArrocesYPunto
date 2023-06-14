<!--Grupo 3-->

<?php
require_once('Database.php');

// $bd = Database::conectarBD('mysql', 'tfg2022imf', 'mysql-5706.dinaserver.com', '3306', 'admintfg22', 'Morcilla01.');
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
    <link rel="stylesheet" href="stylesMobile.css">
    <link rel="stylesheet" href="fontawesome/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="img/logo_WPD_22.ico">
    
    <title>Arroces</title>
</head>

<body onscroll="sticky()">
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
                    <a href="#recetas">
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
        <div class="imHeader">
            <img class="imagenHeader" src="img/sandy-ravaloniaina-rARwqh9IXEE-unsplash.jpg" alt="">
        </div>
        <div>
            <img class="logoHeader" src="img/arroces-y-punto-blanco.png" alt="">
        </div>
        <div>
            <a href="#historia"><img class="flecha" src="img/png-transparent-arrow-computer-icons-logo-white-down-arrow-miscellaneous-angle-rectangle.png" alt=""></a>
        </div>
    </header>
    <main>
        <section id="historia" class="historia">
            <p class="texto1">El <b>arroz</b> se introdujo en la gastronomía valenciana durante la ocupación árabe en el siglo VIII y se convirtió en un ingrediente común en el siglo XV.
            </p>
            <img class="img1" src="img/teress-arroz.jpg" alt="">
            <p class="texto2" style="font-size:2.5rem;">Explora nuestra selección única de arroces tradicionales y contemporáneos, cuidadosamente elaborados para satisfacer incluso los paladares más exigentes.
            </p>
            <img class="img2" src="img/arroces-al-sarmiento.jpg" alt="">
            <img class="img3" src="img/Frfe8mgWwAEJy5F.jpg" alt="">
        </section>
        <section id="recetas" class="recetas">
            <?php
            Database::cardsrecetas($bd, 'SELECT * FROM 3_cardsreceta limit 3');
            ?>
        </section>
        <section class="cursos">
            <div class="cursosdetalle1">
                <img src="img/arroz.png">
                <h2>ARROCES</h2>
                <p>¿Te gusta la paella y quieres prepararla como un auténtico chef? Aquí encontrarás las mejores recetas para impresionar a tus comensales.</p>
            </div>
            <div class="cursosdetalle2">
                <img src="img/caldera.png">
                <h2>CALDOS</h2>
                <p>¿Quieres sorprender a tus comensales con una paella espectacular? Eso es imposible sin saber cómo preparar el caldo perfecto para tu paella.</p>
            </div>
            <div class="cursosdetalle3">
                <img src="img/cocinero.png">
                <h2>HOSTELERIA</h2>
                <p>¿Eres un chef profesional en busca de nuevas ideas para tus paellas? Descubre nuestras recetas y técnicas para llevar tus paellas al siguiente nivel.</p>
            </div>
        </section>
        <section class="restaurantes" id="restaurantes">
            <!--nos gustaria poner los restaurantes ordenados por cercania al usuario-->
            <div class="cardRestaurante">
                <img src="img/arroces-al-sarmiento.jpg" alt="">
                <h2><em>Los Arroces de Segis</em></h2>
                <p>3/5</p>
                <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
            </div>
            <div class="cardRestaurante">
                <img src="img/lacabra.jpg" alt="">
                <h2><em>Restaurante La Cabra</em></h2>
                <p>5/5</p>
                <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
            </div>
            <div class="cardRestaurante">
                <img src="img/TR5DYQ4TMNB3JB5FVMSJUXFGKA.jpg" alt="">
                <h2><em>Volea</em></h2>
                <p>4/5</p>
                <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
            </div>
        </section>
    </main>
    <footer>
        <div>
            <address>Calle Bernardino Obregón 19 <br>
                91 765 87 34</address>
            <p>contacto@arrocesypunto.com
            </p>
        </div>
        <div class="redes">
            <i class="bi bi-instagram"></i>
            <i class="bi bi-twitter"></i>
            <i class="bi bi-youtube"></i>
        </div>
        <div>
            <iframe style="width: 20rem; height: 10rem;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48612.69864695752!2d-3.7644374370574814!3d40.40234473911657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4226329f436ff9%3A0x12f6d2396a33911!2sIMF%20Smart%20Education!5e0!3m2!1ses!2ses!4v1680193132347!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </footer>


    <script src="app.js"></script>
</body>

</html>