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

<h2><i>Public Representative Database</i></h2>
<h4><i>(search by)</i><h4>
<p></p>

<form action="selectstr.php" method="post">

<div class="Container">

	<label for="rp"><b>Representative</b></label>   
	<input type="radio" name="rp" value="MLA" > MLA 
	<input type="radio" name="rp" value="MP"> MP<br><br>

	<label for="Acc"><b>Select Acc (for MP)</b></label>
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

	<label for="EDC"><b>Select EDC (for MLA)</b></label>
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
	<label for="Crml"><b>Criminal Convictions</b></label>   
	<input type="radio" name="Crml" value="1" > YES 
	<input type="radio" name="Crml" value="0"> NO<br><br>
	
	<label for="Sex"><b>Sex</b></label>   
	<input type="radio" name="gender" value="Male" > Male 
	<input type="radio" name="gender" value="Female"> Female
	<input type="radio" name="gender" value="Other"> Other <br><br>
	
	<label for="Party"><b>Party Name</b></label>   
	<input type="radio" name="Party" value="PA">PA
	<input type="radio" name="Party" value="PB"> PB
	<input type="radio" name="Party" value="PA">PC
	<input type="radio" name="Party" value="PB">PD <br><br>
	
 <button type="submit" class="signupbtn">Show result</button>
</div>
</form>
</style>
</head>
</html>
