<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>
<?php include("config.php"); ?>

<h1>Visualizador del orden de los datos</h1>

<form action="orderconf.php" method="post">

    <label><strong>Selecciona el campo por el que ordenar:</strong></label><br/>
    
    <input type="radio" id="fname" name="field" value="firstname" checked required>
    <label for="fname">Nombre</label><br>

    <input type="radio" id="lname" name="field" value="lastname">
    <label for="lname">Apellido</label><br>

    <input type="radio" id="telephone" name="field" value="telephone">
    <label for="phone">Telefono</label><br>

    <input type="radio" id="ucode" name="field" value="usercode">
    <label for="ucode">Código de usuario</label><br>

    <br/>

    <label><strong>Orden acsendente o descendente:</strong></label><br/>

    <input type="radio" id="asc" name="order" value="ASC" checked required>
    <label for="asc">Acsendente (A-Z)</label><br>

    <input type="radio" id="desc" name="order" value="DESC">
    <label for="desc">Descendente (Z-A)</label><br>

    <br/>
    <p><input type="submit" value="Send"></p>

</form>

<?php include("./footer.html"); ?>