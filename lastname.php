<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>
<?php include("config.php"); ?>

<h1>Filtro de Apellido</h1>

   <form action="lastnameconf.php" method="post">

    <br/>

    <label>Inserta el apellido a filtrar:</label>
    <input type="text" name="lastname" required/>

    <br/>

    <p><input type="submit" value="Enviar"></p>

<?php include("./footer.html"); ?>