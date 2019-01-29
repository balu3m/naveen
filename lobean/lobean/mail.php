<?php 
if($_POST){
	$name = $_POST['Name'];
	$company = $_POST['Company'];
	$email = $_POST['E-mail'];
	$phone = $_POST['Phone'];
	$message = $_POST['Message'];
}


$servername = 35.196.120.42;
$username = "admin";
$password = "lobean";
$dbname = "lobean";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO contactform (name, email, company, mobile , message )
VALUES ('$name', '$email', '$company' , '$phone' , '$message')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
}
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
 exit(); ?>
