<?php
$servername = 35.196.120.42;
$username = "admin";
$password = "lobean";
$dbname = "lobean";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name, company , mobile, message FROM contactform";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " " . $row["company"] ."" . $row["mobile"] ." " . $row["message"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

