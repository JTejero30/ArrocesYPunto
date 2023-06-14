<?php
require_once('Database.php');
$bd = Database::conectarBD('mysql', 'tfg2022imf', 'mysql-5706.dinaserver.com', '3306', 'admintfg22', 'Morcilla01.');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="MiguelJavier">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="img/logo_WPD_22.ico">
    <link rel="stylesheet" href="receta.css">
    <title><?php echo urldecode($_GET['receta']) ?></title>
</head>

<body>
    <main>
        <div class="receta"><?php
                            $nombreReceta =  urldecode($_GET['receta']);
                            Database::recetasIndividual($bd, 'SELECT * FROM 3_cardsreceta where nombreReceta= "' . $nombreReceta . '"');
                            $arrayPasos = Database::pasosReceta($bd, 'SELECT pasos FROM 3_cardsreceta where nombreReceta= "' . $nombreReceta . '"');
                            $jsonArray = json_encode($arrayPasos)
                            ?>
            <script>
                var pasos = <?php echo $jsonArray ?>; // Pasar el array de pasos desde PHP a JavaScript

                let pasoActual = 0;

                function mostrarPaso() {
                    if (pasoActual < pasos.length) {
                        document.getElementById("pasos").innerHTML = pasos[pasoActual];
                        pasoActual++;
                    } else {
                        document.getElementById("pasos").innerHTML = 'Receta finalizada <i class="bi bi-emoji-laughing"></i>';
                    }
                }

                function anterior() {
                    if (pasoActual > 0) {
                        pasoActual--;
                        document.getElementById("pasos").innerHTML = pasos[pasoActual];
                    } else {
                        document.getElementById("pasos").innerHTML = "Pulsa siguiente para empezar";
                    }
                }
            </script>

            <div id="pasos">
                <p>Pulsa siguiente para empezar</p>

            </div>
            <div class="flechas">
                <button class="izq" onclick="anterior()"><i class="bi bi-arrow-left"></i></button>

                <button class="der" onclick="mostrarPaso()"><i class="bi bi-arrow-right"></i></button>
            </div>
        </div>

    </main>

    <script src="app.js"></script>
</body>

</html>