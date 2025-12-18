<?php include("./header.html"); ?>
<?php include("sesion.php"); ?>

<?php
include("config.php");
include ("recoge.php");


$firstname = recoge("firstname");
$lastname = recoge("lastname");
$email = recoge("email");
$usercode = recoge("usercode");
$phone = recoge("telephone");

if ($firstname == "" || $lastname == "" || $email == "" || $usercode == "" || $phone == "") {
    header("Location: insert.php");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: insert.php");
}

if (!preg_match("/^u[0-9]{5}$/", $usercode)) {
    header("Location: insert.php");
}

if (strlen($phone) > 15) {
    header("Location: insert.php");
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email, telephone, usercode)
VALUES ('$firstname', '$lastname', '$email', '$phone', '$usercode')";

if (!mysqli_query($conn, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
else {
    echo "New record created successfully";
}

print "<br/>";
print "<br/>";
print "<a href='index.php'>Volver al inicio</a>";

mysqli_close($conn);
?>

<?php include("./footer.html"); ?>