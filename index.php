<!--Grupo 3-->

<?php
require_once('Database.php');

$bd=Database::conectarBD('mysql', 'ArrocesYPunto', 'localhost', '3306', 'root', '');

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
        <div class="imHeader">
            <img class="imagenHeader" src="img/sandy-ravaloniaina-rARwqh9IXEE-unsplash.jpg" alt="">
        </div>
        <div>
            <img class="logoHeader" src="img/arroces-y-punto-blanco.png" alt="">
        </div>
        <div>
            <a href="#historia"><img class="flecha"
                    src="img/png-transparent-arrow-computer-icons-logo-white-down-arrow-miscellaneous-angle-rectangle.png"
                    alt=""></a>
        </div>
    </header>
    <main>
        <section id="historia" class="historia">
            <p class="texto1">El arroz es un ingrediente fundamental en la gastronomía valenciana, y su historia en
                la región se remonta a muchos siglos atrás.
                <br>
                <br>
                Se cree que los árabes, que ocuparon la Península Ibérica durante varios siglos, introdujeron el
                cultivo del arroz en Valencia en el siglo VIII. Sin embargo, no fue hasta la época medieval que el
                arroz empezó a ser un ingrediente común en la dieta de los valencianos.
                <br>
                <br>
                Durante el siglo XV, los agricultores de la región empezaron a experimentar con diferentes técnicas
                de cultivo del arroz y a desarrollar variedades locales de este cereal. En el siglo XVIII, el
                cultivo del arroz se expandió rápidamente en Valencia gracias a la construcción de sistemas de
                irrigación y canales para llevar el agua a los campos.
            </p>
            <img class="img1" src="img/arroz-manos-square.jpg" alt="">
            <p class="texto2">En el siglo XIX, la paella se convirtió en el plato más emblemático de la cocina
                valenciana, y el arroz se convirtió en un ingrediente clave de esta preparación. La paella de
                marisco, la paella de verduras y la paella mixta se convirtieron en las versiones más populares de
                este plato en Valencia.
                <br>
                <br>
                Hoy en día, la Comunidad Valenciana es uno de los principales productores de arroz en España y la
                paella sigue siendo el plato más emblemático de la gastronomía valenciana.
                <br>
                <br>
                En esta pagina queremos darle el sitio que merece a este plato. Vamos a aprender a cocinar arroces con
                técnicas de los mejores chefs, vas a poder ver los mejores restaurantes de tu zona donde si tratan a
                este plato como se merece, también podrás comprar productos para lograr el mejor arroz. Bienvenido a
                ArrocesYPunto...
            </p>
            <img class="img2" src="img/arroces-al-sarmiento-square.jpg" alt="">
            <!-- <p class="texto3"><em>En nuestra web, encontrarás una amplia variedad de recetas, restaurantes y productos relacionados con el arroz de origen valenciano. Nuestra sección de recetas incluye una selección de platos tradicionales y modernos, todos ellos creados con arroz valenciano de alta calidad. Además, ofrecemos información sobre los mejores restaurantes de la zona, así como recomendaciones de productos relacionados con el arroz. Si eres un amante de la gastronomía valenciana, nuestra web es el lugar perfecto para descubrir todo lo que necesitas saber sobre el arroz de Valencia.            </em></p> -->
            <img class="img3" src="img/Frfe8mgWwAEJy5F.jpg" alt="">
        </section>
        <section id="recetas" class="recetas">
            <!-- <div class="cardReceta">
                <section class=""></section>
                <img src="img/Arroz_01.jpg" alt="">
                <h2><em>Arroz de Salmonete</em></h2>
                <p></p>
            </div> -->
            <?php
            Database::cardsRecetas($bd, 'SELECT * FROM cardsreceta limit 3');
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
                <h2>ARROZ HOSTELERIA</h2>
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
                <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i
                    class="far fa-star"></i><i class="far fa-star"></i>
            </div>
            <div class="cardRestaurante">
                <img src="img/TR5DYQ4TMNB3JB5FVMSJUXFGKA.jpg" alt="">
                <h2><em>Volea</em></h2>
                <p>4/5</p>
                <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i
                    class="far fa-star"></i>
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