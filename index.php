<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="author" content="Manuel Ortiz Moreno">
    <title>SQL+PHP</title>

</head>
<body>

<?php

session_start();

if(!isset ($_SESSION["conectado"] )|| $_SESSION["conectado"] = false){
        header("Location:loginconf.php");

}

?>

<ol>
    <li><a href="db_connect.php">Conectar</a></li>
    <li><a href="db_create.php">Crear la base de datos (conectarse, crear, desconectarse)</a></li>
    <li><a href="db_drop.php">Borrar la base de datos (conectarse, borrar, desconectarse)</a></li>
    <li><a href="table_create_guests.php">Crear la tabla myGuests (conectarse, crear, desconectarse)</a></li>
    <li><a href="table_check_exists.php">Verificar la existencia de la tabla myGuests (conectarse, consultar, desconectarse)</a></li>
    <li><a href="table_drop.php">Borrar la tabla myGuests (conectarse, borrar, desconectarse)</a></li>
    <li><a href="data_insert_single.php">Insertar datos (de manera individual) (conectarse, insertar, desconectarse)</a></li>
    <li><a href="data_insert_single_get_last_id.php">Insert data (single record) y obtener el último ID introducido(conectarse, insertar, consultar el último ID, desconectarse)</a></li>
    <li><a href="data_insert_multiple_simple.php">Insertar multiples datos sin preparar (conecto, ejecuto x3, desconecto)</a></li>
    <li><a href="data_insert_multiple_prepared.php">Insertar multiples datos (conecto, preparo, ejecuto x3, desconecto)</a></li>
    <li><a href="data_count.php">Contar los registros de la tabla (conectarse, seleccionar, desconectarse)</a></li>
    <li><a href="data_select_all.php">Mostrar todos los datos (conectarse, seleccionar, desconectarse)</a></li>
    <li><a href="data_select_where.php">Mostrar los datos donde cuyo lastName es Doe (conectarse, seleccionar donde, desconectarse)</a></li>
    <li><a href="data_select_orderby.php">Mostrar los datos ordenado por el lastName (conectarse, seleccionar ordenados por, desconectarse)</a></li>
    <li><a href="data_select_where_orderby_html_table.php">Mostrar filtrados y ordenados los datos en una tabla HTML(conectarse, seleccionar donde están ordenados por, desconectarse)</a></li>
    <li><a href="data_delete.php">Borrar el usuario id=3 (conecto, borrar, desconecto)</a></li>
    <li><a href="data_update.php">Actualizar el lastname del usuario con id=2 (conectarse, actualizar, desconectarse)</a></li>
    <li><a href="form.php">Consultas extras</a></li>

    <br/>

    <form action="logincp.php" method="post">
 
    <label>¿Seguro que quieres cerrar sesión?</label>

    <br/>

    <input type="submit" name="valor" value="Yes"/>
    <input type="submit" name="valor" value="No"/>

</form>

</ol>
</body>
</html>