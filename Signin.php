 <?php
$Email=$_POST['email'];
$psw=$_POST['psw'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "public representatives database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
echo <<<HTML
<a href="firstpg.php"><button type="submit" >Search by</button></a><br><br>
    <form action="" method="post">
    <label for="MPR"><b>Rate your MP</b></label>   
	<input type="radio" name="MPR" value="1" > 1
	<input type="radio" name="MPR" value="2" > 2
	<input type="radio" name="MPR" value="3" > 3
	<input type="radio" name="MPR" value="4" > 4
	<input type="radio" name="MPR" value="5" > 5
	<input type="radio" name="MPR" value="6" > 6
	<input type="radio" name="MPR" value="7" > 7
	<input type="radio" name="MPR" value="8" > 8
	<input type="radio" name="MPR" value="9" > 9
	<input type="radio" name="MPR" value="10"> 10<br><br>
	
	<label for="MLAR"><b>Rate your MLA</b></label>   
	<input type="radio" name="MLAR" value="1" > 1
	<input type="radio" name="MLAR" value="2" > 2
	<input type="radio" name="MLAR" value="3" > 3
	<input type="radio" name="MLAR" value="4" > 4
	<input type="radio" name="MLAR" value="5" > 5
	<input type="radio" name="MLAR" value="6" > 6
	<input type="radio" name="MLAR" value="7" > 7
	<input type="radio" name="MLAR" value="8" > 8
	<input type="radio" name="MLAR" value="9" > 9
	<input type="radio" name="MLAR" value="10"> 10<br><br>
	
	<button type="submit" >Update</button>
	</form>
	
HTML;

$sql = "SELECT * FROM user Where EMAIL=$Email and PSW=$psw ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "First Name: " . $row["FNAME"]. "Last Name " . $row["LNAME"]. " Age " . $row["AGE"]. "Email " . $row["EMAIL"]. "ACC" . $row["ACC"]. " " . $row["EDC"]. " <br>";
    }
} else {
    echo "0 results Incorrect Email or Password";
}
$conn->close();
?> 

