

<?php 
session_start();
$aadhar =  $_SESSION['xxx'];

$host ='localhost';
$user = 'root';
$password = '';
$db_name = 'oxygen_supply';

$con = mysqli_connect($host,$user,$password,$db_name);

if(mysqli_connect_error()){
	die("Failed to upload".mysqli_connect_error());
}


	echo("
<html>
<head>
<title>add</title>
<link rel='stylesheet' href='Style.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

<script>
function validate(){
	var x = document.getElementById('cylinder').value;
	var y = document.getElementById('pulse').value;
	
	if x >= 0 and y >= 0{
		return True;
	}
	
	else{
		alert('Please enter valid value')
	}
}
</script>
</head>
<body>

<form  class='Signup_box' action = 'signup_2.php' method = 'post' onsubmit = 'return validate()'>

<label>Cylinder</label>
<input type = 'number' id = 'cylinder' name = 'cylinder'>
<br>

<label>Mask-type</label>
<select name = 'mask'>
<option value = 'Nasal cannulae'>Nasal cannulae</option>
<option value = 'Venturi mask'>Venturi mask</option>
<option value = 'Non-rebreather mask'>Non-rebreather mask</option>
</select>
<br>

<label>Pulse-Oxymeter</label>
<input type = 'number' id = 'pulse' name = 'pulse'>
</label>
<br>

<input type = 'submit' name = 'component'>
</form>			
");
	
if (isset($_POST['component'])){	
	
	
$res = mysqli_query($con,"SELECT * FROM srf WHERE AADHARNUMBER = '$aadhar'");
$Row = mysqli_fetch_array($res);
$num = $Row['numberOfCylinders'];	
$mask = $Row['MASK'];
$pulse = $Row['PULSE'];

$num = $num + (int)$_POST['cylinder'];
$query2 = "UPDATE srf SET numberOfCylinders = $num WHERE AADHARNUMBER = '$aadhar'";	
$update1 = mysqli_query($con,$query2); 
	
	$name  = $Row['FIRSTNAME'];
	$username = $Row['USERNAME'];
	$history = "Added ".$num."th cylinder";
	$date  = date('m-d-y');
	$a1   = mysqli_query($con,"INSERT INTO history  (USERNAME,FIRSTNAME,HISTORY,DATE) VALUES ('$username','$name','$history','$date')
			");
	

$pulse = $pulse + (int)$_POST['pulse'];
$query2 = "UPDATE srf SET PULSE = '$pulse' WHERE AADHARNUMBER = '$aadhar'";	
$update2 = mysqli_query($con,$query2); 
	
	$name  = $Row['FIRSTNAME'];
	$username = $Row['USERNAME'];
	$history = "Added ".$pulse."th pulse-oxymeter";
	$date  = date('m-d-y');
	$a2   = mysqli_query($con,"INSERT INTO history  (USERNAME,FIRSTNAME,HISTORY,DATE) VALUES ('$username','$name','$history','$date')
			");
	
		

$mask = $_POST['mask']; 
	
	$name  = $Row['FIRSTNAME'];
	$username = $Row['USERNAME'];
	$history = "Added ".$mask." MASK-KIT";
	$date  = date('m-d-y');
	$a3   = mysqli_query($con,"INSERT INTO history  (USERNAME,FIRSTNAME,HISTORY,DATE) VALUES ('$username','$name','$history','$date')
			");
	
		
		
	
	if($update1 and $update2){
		echo("<script>alert('Successfully Added ')</script>");
		header('location:tocylinder.php');
	}
	else{
		echo("<script>alert('Something Went Wrong in Our Side')</script>");
		header('reload:0');
	}
}
	
	
	
	?>