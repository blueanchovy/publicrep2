 <?php
$EDC=$_POST['EDC'];
$Acc=$_POST['Acc'];
$Rep=$_POST['rp'];
$crml=$_POST['crml'];
$Party=(isset($_POST['party']) ? $_POST['party'] : '');
$Sex=(isset($_POST['gender']) ? $_POST['gender'] : '');
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

$sql = "SELECT * FROM MP,MLA";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
