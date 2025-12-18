<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>
<?php include("db_connect.php"); ?>

<h1>Borrar usuario</h1>

<form action="iddelete.php" method="post">

    <label>Introduzca el ID del usuario a borrar</label>
    <br/>
    <input type="number" name="id" required>
    <br/>
    <p><input type="submit" value="Enviar"></p>

</form>

<?php include("./footer.html"); ?>