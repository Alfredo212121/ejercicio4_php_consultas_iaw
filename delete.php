<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>

<?php
include("config.php");
?>

<h1>Borrar Usuario</h1>

<form action="borrarID.php" method="post">

    <label>Introduzca el ID del usuario a borrar:</label>
    <br>
    <input type="number" name="id" required>
    
    <br>

    <p><input type="submit" value="Send"></p>

</form>

<?php include("./footer.html"); ?>