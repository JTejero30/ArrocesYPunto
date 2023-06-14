<?php

class Database
{


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
            echo '<img src="img/' . $row['imagen'] . '.jpg" alt="">';
            echo '<h4 class="nombreCard">' . $row['nombre'] . '</h4>';
            echo '<p class="descripcionProducto">' . $row['descripcion'] . '</p>';
            echo '<p class="precioProducto">' . $row['precio'] . '€</p>';
            echo '<p class="categoria">' . $row['categoria'] . '</p>';
            echo '<button class="añadirCarrito">+</button>';
            echo '</div>';
        }
    }

    public static function cardsrecetas($gbd, $query)
    {
        $resulset = $gbd->query($query);
        
        // <img class="d-block w-100" src="..." alt="First slide">

        foreach ($resulset as $row) {

            echo '<a href="receta.php?receta=' . urlencode($row['nombreReceta']) . '" target="_blank"><div class="cardReceta">';
            echo '<img src="img/' . $row['imagen'] . '.jpg" alt="">';
            echo '<h2 class="nombreReceta"><em>' . $row['nombreReceta'] . '</em></h2>';
            echo '<p class="descripcionReceta">' . $row['descripcionReceta'] . '</p>';
            echo '</div></a>';

        }
    }
    public static function recetasIndividual($gbd, $query)
    {

        $resulset = $gbd->query($query);



        foreach ($resulset as $row) {

        
            // $arrayIngredientes=explode("-",  $row['ingredientes']);
            // $tamano= (intval( count($arrayIngredientes)/2)) ;
            
            echo '<div class="imagenReceta">';
            echo '<img src="img/' . $row['imagen'] . '.jpg" alt="">';
            echo '</div>';
            echo '<div class="recetaTexto">';
            echo '<h1 class="nombreReceta"><b>' . $row['nombreReceta'] . '</b></h2>';
            echo '<p class="descripcionReceta">' . $row['descripcionReceta'] . '</p>';
            echo '<p class="ingredientes">' . $row['ingredientes'] . '</p>';
            
            // echo '<p class="pasos">' . $row['pasos'] . '</p>';
        }
    }
    public static function pasosReceta($gbd, $query)
    {
        $resultset = $gbd->query($query);
        $string="";

        foreach ($resultset as $row) {
            $string= $string . $row['pasos'];
        }
        $array= explode("-",$string);

        return $array;
    }

    public static function precioMax($gbd)
    {

        $resulset = $gbd->query('select MAX(precio) from 3_tienda');

        foreach ($resulset as $row) {

            echo '<input id="barraPrecio" value="50" type="range" min="0" max= ' . $row['MAX(precio)'] . '  step="10" onclick="filtrarPrecio(value)">';
        }
    }

    public static function getAll($tabla){
        $sql="SELECT * FROM $tabla";
        $resultado = self::conectarBD('mysql', 'tfg2022imf', 'mysql-5706.dinaserver.com', '3306', 'admintfg22', 'Morcilla01.')->query($sql);
        return $resultado;
    }
    public static function getById($id,$tabla){
        $sql = "SELECT * FROM $tabla WHERE id = $id";
        $resultado = self::conectarBD('mysql', 'tfg2022imf', 'mysql-5706.dinaserver.com', '3306', 'admintfg22', 'Morcilla01.')->query($sql);
        return $resultado->fetch(PDO::FETCH_ASSOC);
    }

    //Insert
    public static function comprobar($datos){
        $sql= "SELECT COUNT(*) as cantidad FROM 3_users WHERE email= '$datos[3]'";
        $resultado = self::conectarBD('mysql', 'tfg2022imf', 'mysql-5706.dinaserver.com', '3306', 'admintfg22', 'Morcilla01.')->query($sql);
        $count = $resultado->fetch(PDO::FETCH_ASSOC)['cantidad'];
        
        if($count>0){
            header('Location: registro.php');
        }else{
            $sql = "INSERT INTO 3_users (nick, f_nacimiento, contraseña, email, rol_id) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]')";
            self::conectarBD('mysql', 'tfg2022imf', 'mysql-5706.dinaserver.com', '3306', 'admintfg22', 'Morcilla01.') -> exec($sql);
            $email = $datos[3];
            $contraseña = $datos[2];
            $resultado = Database::login($email, $contraseña);
            session_start();
            $_SESSION['user'] = $resultado;
            header('Location: index.php');
        }
    }

    public static function saveUsers($datos){
        $sql = "INSERT INTO 3_users (nick, f_nacimiento, contraseña, email, rol_id) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$datos[4]')";
        self::conectarBD('mysql', 'tfg2022imf', 'mysql-5706.dinaserver.com', '3306', 'admintfg22', 'Morcilla01.') -> exec($sql);
    }
    public static function saveTienda($datos){
        $sql = "INSERT INTO 3_tienda (nombre, descripcion, precio, categoria) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]')";
        self::conectarBD('mysql', 'tfg2022imf', 'mysql-5706.dinaserver.com', '3306', 'admintfg22', 'Morcilla01.') -> exec($sql);
    }
    public static function saveCursos($datos){
        $sql = "INSERT INTO 3_cursos (nombre, descripcion) VALUES ('$datos[0]', '$datos[1]')";
        self::conectarBD('mysql', 'tfg2022imf', 'mysql-5706.dinaserver.com', '3306', 'admintfg22', 'Morcilla01.') -> exec($sql);
    }
    public static function saveRecetas($datos){
        $sql = "INSERT INTO 3_cardsreceta (nombreReceta, descripcionReceta) VALUES ('$datos[0]', '$datos[1]')";
        self::conectarBD('mysql', 'tfg2022imf', 'mysql-5706.dinaserver.com', '3306', 'admintfg22', 'Morcilla01.') -> exec($sql);
    }

    //Update

    public static function updateUsers($datos){
        $sql = "UPDATE 3_users SET nick = '$datos[1]' , f_nacimiento = '$datos[2]', contraseña = '$datos[3]' , email = '$datos[4]', rol_id = '$datos[5]' WHERE id = $datos[0]";
        self::conectarBD('mysql', 'tfg2022imf', 'mysql-5706.dinaserver.com', '3306', 'admintfg22', 'Morcilla01.') ->exec($sql);
    } 
    public static function updateTienda($datos){
        $sql = "UPDATE 3_tienda SET nombre = '$datos[1]' , descripcion = '$datos[2]', precio = $datos[3] , categoria = '$datos[4]' WHERE id = $datos[0]";
        self::conectarBD('mysql', 'tfg2022imf', 'mysql-5706.dinaserver.com', '3306', 'admintfg22', 'Morcilla01.') ->exec($sql);
    }  
    public static function updateCursos($datos){
        $sql = "UPDATE 3_cursos SET nombre = '$datos[1]' , descripcion = '$datos[2]' WHERE id = $datos[0]";
        self::conectarBD('mysql', 'tfg2022imf', 'mysql-5706.dinaserver.com', '3306', 'admintfg22', 'Morcilla01.') ->exec($sql);
    } 
    public static function updateRecetas($datos){
        $sql = "UPDATE 3_cardsreceta SET nombreReceta = '$datos[1]' , descripcionReceta = '$datos[2]' WHERE id = $datos[0]";
        self::conectarBD('mysql', 'tfg2022imf', 'mysql-5706.dinaserver.com', '3306', 'admintfg22', 'Morcilla01.') ->exec($sql);
    }        

    //Delete
    
    public static function delete($id, $tabla){
        $sql = "DELETE FROM $tabla WHERE id = $id";
        self::conectarBD('mysql', 'tfg2022imf', 'mysql-5706.dinaserver.com', '3306', 'admintfg22', 'Morcilla01.')->exec($sql);
    }
    public static function login($email, $password){
        // 1. Conectar a la BD

        // 2. Realizar consulta con el email y password recibido
        $sql = "SELECT * FROM 3_users WHERE email = '$email' AND contraseña = '$password'";
        echo $sql;
        // 3. Si es correcto, devuelvo los datos del usuario
        $user = self::conectarBD('mysql', 'tfg2022imf', 'mysql-5706.dinaserver.com', '3306', 'admintfg22', 'Morcilla01.')->query($sql);

        if($user != null){
            return $user->fetch(PDO::FETCH_ASSOC);
            echo $user;
        }
        else{
            // 4. Si no es correcto, devuelvo null
            return null;
        }
    }
}
