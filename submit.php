 <?php
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$Email=$_POST['Email'];
$Age=$_POST['Age'];
$Sex=(isset($_POST['gender']) ? $_POST['gender'] : '');
$EDC=$_POST['EDC'];
$Acc=$_POST['ACC'];
$psw=$_POST['psw'];
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

$sql = "INSERT INTO user (FNAME,LNAME,AGE,EMAIL,ACC,EDC,SEX,PSW)
VALUES ('$FirstName ', '$LastName ', '$Age' ,'$Email' , '$Acc' , '$EDC' , '$Sex' , '$psw')";

echo <<<HTML
<a href="index.php"><button type="submit" >Log-in</button></a><br>
HTML;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
