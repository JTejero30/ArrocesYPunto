<?php

class Database{

public static function conectarBD($driver, $db, $host, $port, $user, $password)
    {

        $dsn = "$driver:dbname=$db;host=$host;port=$port";

        try {
            // La variable $gbd tiene toda la configuracion de la conexion
            $gbd = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
        return $gbd;
    }

    public static function mostrarCards($gbd, $query)
    {

        $resulset = $gbd->query($query);

        foreach ($resulset as $row) {
            echo '<div class="card">';
            echo '<img src="img/'.$row['imagen'].'.jpg" alt="">';
            echo '<h4 class="nombreCard">' . $row['nombre'] . '</h4>';
            echo '<p class="descripcionProducto">' . $row['descripcion'] . '</p>';
            echo '<p class="precioProducto">' . $row['precio'] . '€</p>';
            echo '<p class="categoria">'.$row['categoria'].'</p>';
            echo '</div>';
        }
    }

    public static function cardsRecetas($gbd, $query){

        $resulset = $gbd->query($query);

        foreach ($resulset as $row) {
        echo '<div class="cardReceta">';
        echo '<img src="img/'.$row['imagen'].'.jpg" alt="">';
        echo '<h2 class="nombreReceta"><em>' . $row['nombreReceta'] . '</em></h2>';
        // echo '<p class="descripcionReceta">' . $row['descripcion'] . '</p>';
        echo '</div>';
        }
    }
    public static function precioMax($gbd){

        $resulset = $gbd->query('select MAX(precio) from tienda');

        foreach ($resulset as $row){

        echo '<input id="barraPrecio" value="0" type="range" min="0" max= '. $row['MAX(precio)'] .'  step="10" onclick="filtrarPrecio(value)">';
        }
    }

}
