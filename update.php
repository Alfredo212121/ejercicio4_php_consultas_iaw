<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>

<?php
include("config.php");
?>

<h1>Actualizar Apellido del Usuario</h1>

<form action="idupdate.php" method="post">

    <label>ID del usuario a modificar</label>
    <br>
    <input type="number" name="id" required>
    <br>

    <label>Apellido: </label>
    <br>
    <input type="text" name="lastname" required>
    <br>

    <p><input type="submit" value="Enviar"></p>

</form>

<?php include("./footer.html"); ?>