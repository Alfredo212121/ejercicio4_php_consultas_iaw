<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>

<?php

include("config.php");

?>

<h1>¿Qué tipo de consulta quieres realizar?</h1>

   <form action="testform.php" method="post">

    <br>
    <input type="radio" name="valor" value="insert" /> <label>Insertar datos a través de un formulario</label><br>
    <input type="radio" name="valor" value="lastname" /> <label>Mostrar los datos de los usuarios cuyo apellido es un valor introducido en un formulario</label><br>
    <input type="radio" name="valor" value="order" /> <label>Ver todos los datos ordenados ascendentemente o descendientemente con un valor introducido a través de un formulario</label><br>
    <input type="radio" name="valor" value="delete" /> <label>Borrar un usuario cuyo ID es introducido a través de un formulario</label><br>
    <input type="radio" name="valor" value="update" /> <label>Actualizar el apellido de un usuario cuyo ID es introducido en un formulario</label><br>


    <p><input type="submit" value="Enviar"></p>

    <a href='index.php'>Volver atrás</a>";


<?php include("./footer.html"); ?>