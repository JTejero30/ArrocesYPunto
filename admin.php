<?php
// 0. Inicio sesion o continuo con sesion iniciada
session_start();

// 1. Comprobar si la session esta iniciada
if(isset($_SESSION['user'])){
  // Existe
  if($_SESSION['user']['rol_id'] == 2){
  // 3. Si session iniciada y rol de usuario, te mando al usuario
  header('Location: index.php');
  }
}else{
  header('Location: ../auth/index.php');
}

require_once("Database.php");
$usuarios=Database::getAll("3_users");
$productos=Database::getAll("3_tienda");
$cursos=Database::getAll("3_cursos");
$recetas=Database::getAll("3_cardsreceta");
$cabeceraUser=["nick","f_nacimiento","contraseña","email","rol_id"];
$cabeceraProduct=["nombre","descripcion","precio","categoria"];
$cabeceraCursos=["nombre","descripcion",];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Usuarios</h1>
        <table class="tabla">
            <thead>
            <?php
                echo '<tr>';
                echo '<th class="id">id</th>';
                foreach($cabeceraUser as $th){
                echo '<th>' . $th . '</th>';    
                }
                echo '<td> <button class="boton"><a href=CRUD/USERS/createUsers.php?tabla=3_users>Crear</a></td>';
                echo '</tr>';
            ?>
            </thead>
            <tbody>
                <?php
                
                foreach($usuarios as $contenido){
                    echo '<tr>';
                    echo '<td class="id">'.$contenido['id'].'</td>';
                    echo '<td>'.$contenido['nick'].'</td>';
                    echo '<td>'.$contenido['f_nacimiento'].'</td>';
                    echo '<td>'.$contenido['contraseña'].'</td>';
                    echo '<td>'.$contenido['email'].'</td>';
                    echo '<td>'.$contenido['rol_id'].'</td>';
                    echo '<td> <button class="boton"><a href=CRUD/USERS/editUsers.php?id='.$contenido['id'].'&tabla=3_users>Editar</a></button><button class="boton"><a href=CRUD/delete.php?id='.$contenido['id'].'&tabla=3_users>Eliminar</a></button></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        <br>
        <h1>Productos</h1>
        <table class="tabla">
            <thead>
            <?php
                echo '<tr>';
                echo '<th class="id">id</th>';
                foreach($cabeceraProduct as $th){
                echo '<th>' . $th . '</th>';    
                }
                echo '<td> <button class="boton"><a href=CRUD/TIENDA/createTienda.php?tabla=3_tienda>Crear</a></td>';
                echo '</tr>';
            ?>
            </thead>
            <tbody>
                <?php
                foreach($productos as $contenido){
                    echo '<tr>';
                    echo '<td class="id">'.$contenido['id'].'</td>';
                    echo '<td>'.$contenido['nombre'].'</td>';
                    echo '<td>'.$contenido['descripcion'].'</td>';
                    echo '<td>'.$contenido['precio'].'</td>';
                    echo '<td>'.$contenido['categoria'].'</td>';
                    echo '<td> <button class="boton"><a href=CRUD/TIENDA/editTienda.php?id='.$contenido['id'].'&tabla=3_tienda>Editar</a></button><button class="boton"><a href=CRUD/delete.php?id='.$contenido['id'].'&tabla=3_tienda>Eliminar</a></button></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        <br>
        <h1>Cursos</h1>
        <table class="tabla">
            <thead>
            <?php
                echo '<tr>';
                echo '<th class="id">id</th>';
                foreach($cabeceraCursos as $th){
                echo '<th>' . $th . '</th>';    
                }
                echo '<td> <button class="boton"><a href=CRUD/CURSOS/createCursos.php?tabla=cursps>Crear</a></td>';
                echo '</tr>';
            ?>
            </thead>
            <tbody>
                <?php
                foreach($cursos as $contenido){
                    echo '<tr>';
                    echo '<td class="id">'.$contenido['id'].'</td>';
                    echo '<td>'.$contenido['nombre'].'</td>';
                    echo '<td>'.$contenido['descripcion'].'</td>';
                    echo '<td> <button class="boton"><a href=CRUD/CURSOS/editCursos.php?id='.$contenido['id'].'&tabla=3_cursos>Editar</a></button><button class="boton"><a href=CRUD/delete.php?id='.$contenido['id'].'&tabla=3_cursos>Eliminar</a></button></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        <br>
        <h1>Recetas</h1>
        <table class="tabla">
            <thead>
            <?php
                echo '<tr>';
                echo '<th class="id">id</th>';
                foreach($cursos as $th){
                echo '<th>' . $th . '</th>';    
                }
                echo '<td> <button class="boton"><a href=CRUD/RECETAS/createRecetas.php?tabla=3_cardsreceta>Crear</a></td>';
                echo '</tr>';
            ?>
            </thead>
            <tbody>
                <?php
                foreach($recetas as $contenido){
                    echo '<tr>';
                    echo '<td class="id">'.$contenido['id'].'</td>';
                    echo '<td>'.$contenido['nombreReceta'].'</td>';
                    echo '<td>'.$contenido['descripcionReceta'].'</td>';
                    echo '<td> <button class="boton"><a href=CRUD/RECETAS/editRecetas.php?id='.$contenido['id'].'&tabla=3_cardsreceta>Editar</a></button><button class="boton"><a href=CRUD/delete.php?id='.$contenido['id'].'&tabla=3_cardsreceta>Eliminar</a></button></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>