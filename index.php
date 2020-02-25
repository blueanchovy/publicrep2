<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
    width: 25%;
    padding: 6px 10px;
    margin: 4px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #842962;
    color: white;
    padding: 7px 10px;
    margin: 4px 0;
    border: none;
    cursor: pointer;
    width: 25%;
}

button:hover {
    opacity: 0.8;
}


.container {
    padding: 8px;
}

span.psw {
    float: right;
    padding-top: 8px;
}

}
</style>
</head>
<body>

<h1><i>Public Representative Database</i></h1>
<p></p>
<h4>Login </h4>

<form action="Signin.php" style="border:1px solid #ccc" method="post">
  <div class="container">
    <label for="email"><b>E-mail</b></label>
    <input type="text" placeholder="email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>  
  </div>

</form>
<p></p>
<p><h3><i>or</i></h3></p>

<form action="submit.php" style="border:1px solid #ccc" method="post">
  <div class="container">
    <h3>Sign Up</h3>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <br>
     <label for="FirstName"><b>First Name</b></label>
    <input type="text" placeholder="FirstName" name=" FirstName" required>
	<br>

    <label for="LastName"><b>Last Name</b></label>
    <input type="text" placeholder="Enter LastName" name="LastName" required><br>
	
	 <label for="Age"><b>Age</b></label>
    <input type="number" placeholder="Enter Age" name="Age" required><br>

    <label for="Email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="Email" required><br><br>
    
	 <label for="Acc"><b>Acc</b></label>
    <select multiple name="ACC" placeholder="Enter Acc" name=" Acc" required><br>
	<option value="101">ACA--101</option>
	<option value="202">ACB--202</option>
	<option value="303">ACC--303</option>
	<option value="404">ACD--404</option>
	<option value="105">ACE--105</option>
	<option value="206">ACF--206</option>
	<option value="307">ACG--307</option>
	<option value="408">ACH--408</option>
	</select>
	
	<label for="EDC"><b>EDC</b></label>
    <select multiple name="EDC" placeholder="EDC" name=" EDC" required><br>
	<option value="1001">ECA--1001</option>
	<option value="2002">ECB--2002</option>
	<option value="3003">ECC--3003</option>
	<option value="4004">ECD--4004</option>
	<option value="1005">ECE--1005</option>
	<option value="2006">ECF--2006</option>
	<option value="3007">ECG--3007</option>
	<option value="4008">ECH--4008</option>
	</select>
	<br><br>
	
    <label for="Sex"><b>Sex</b></label>   
	<input type="radio" name="gender" value="Male" > Male 
	<input type="radio" name="gender" value="Female"> Female
	<input type="radio" name="gender" value="Other"> Other <br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>

    <label for="psw_repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw_repeat" required><br>
    

    

    <div class="container">
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>


</body>
</html>
