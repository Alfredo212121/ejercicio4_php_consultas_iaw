<?php include("sesion.php"); ?>

<?php

include("config.php");

// Prepare statement
$stmt = mysqli_prepare($conn, "INSERT INTO MyGuests (firstname, lastname, email, telephone, usercode) VALUES (?, ?, ?, ?, ?)");

// Bind parameters
mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $email, $telephone, $usercode);

// Set parameters and execute first record
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$telephone = "650345684";
$usercode = "u12345";
mysqli_stmt_execute($stmt);

// Second record
$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$telephone = "604395068";
$usercode = "u54321";
mysqli_stmt_execute($stmt);

// Third record
$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$telephone = "693024859";
$usercode = "u09876";
mysqli_stmt_execute($stmt);

echo "New records created successfully";

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>

