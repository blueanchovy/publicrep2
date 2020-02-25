<?php
$MPR=$_POST['MPR'];
$MLAR=$_POST['MLAR'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "public representatives database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `user` SET `MPR`=[$MPR],`MLAR`=[$MLAR] where EMAIL=$Email and PSW=$psw ";

if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 