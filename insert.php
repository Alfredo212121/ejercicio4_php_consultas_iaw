<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>
<?php include("config.php"); ?>

<h1>Insercción de datos</h1>

   <form action="insertcheck.php" method="post">

    <br/>

    <label>Inserta el firstname:</label>
    <input type="text" name="firstname" required/>
    
    <br/>

    <label>Inserta el lastname:</label>
    <input type="text" name="lastname" required/>
    
    <br/>
 
    <label>Insertar el email:</label>
    <input type="email" name="email" required/>
    
    <br/>

    <label>Insertar el user code:</label>
    <input type="text" name="usercode" pattern="^u[0-9]{5}$" required/>
    
    <br/>

    <label>Insertar el telephone:</label>
    <input type="tel" name="telephone" pattern="[0-9+\s-]{9,15}" required/>
    
    <br/>

    <p><input type="submit" value="Enviar"></p>


<?php include("./footer.html"); ?>