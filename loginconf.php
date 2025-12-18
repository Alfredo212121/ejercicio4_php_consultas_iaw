<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="author" content="Manuel Ortiz Moreno">
    <title>EXSQL</title>
</head>
<body>

<?php session_start(); ?>

    <h2> Introduce tus credenciales </h2>

    <form action="logincp.php" method="post">
 
    <label>Usuario:</label>
    <input type="text" name="user" required/>
    <br/>
    <br/>
    <label>Contraseña:</label>
    <input type="password" name="password" required/>

    <br/>
    <br/>

    <input type="submit"  name="submit" value="Login"/>
    <input type="reset" value="Delete"/>

    </form>   
    
</body>
</html>