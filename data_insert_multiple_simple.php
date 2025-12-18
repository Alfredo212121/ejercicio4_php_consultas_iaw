<?php include("sesion.php"); ?>

<?php

include("config.php");


// Prepare the multiple query
$sql = "INSERT INTO MyGuests (firstname, lastname, email, telephone, usercode)
VALUES ('John', 'Doe', 'john@example.com', '650345684', 'u12345');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email, telephone, usercode)
VALUES ('Mary', 'Moe', 'mary@example.com', '604395068', 'u54321');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email, telephone, usercode)
VALUES ('Julie', 'Dooley', 'julie@example.com', '693024859', 'u09876')";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?> 

<?php include("footer.html"); ?>