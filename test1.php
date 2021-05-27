<html>
<head>
<title>signup</title>
<link rel="stylesheet" href="Style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<script>  
function matchPassword() {  
  var pw1 = document.getElementById("password").value;  
  var pw2 = document.getElementById("confirmpassword").value;
  let form = document.getElementById('user');

  
  if(pw1 != pw2)  
  {   
    alert("Passwords did not match");  
	return false;
  } else {
	alert("Username Created Successfully");	  
    return true;
	}  
}  




</script> 

<form class="Signup_box" action = "#" id = "user" name = "user" method = "POST" onsubmit="return matchPassword()">
<label class = "username" id = "username">USERNAME</label><br>
<input type= "text" name = "username" id = "username" placeholder = "Enter your Username" autocomplete='off' required>
<br>
<label class = "password">PASSWORD</label>
<input type = "password" name = "password" id = "password" placeholder = "Enter Password" autocomplete='off' required>
<br>
<input type = "password" name = "confirmpassword" id = "confirmpassword" placeholder = "Enter Confirm Password" autocomplete='off' required>
<br>
<input type = "submit" name = "submit">
</form>
</body>
</head>
</html>

<?php


if(isset($_POST['submit'])){
session_start();
$AADHAR = $_SESSION['aadhar'];

$host ='localhost';
$user = 'root';
$password = '';
$db_name = 'oxygen_supply';

$connection = mysqli_connect($host,$user,$password,$db_name);

if(mysqli_connect_error()){
	die("Failed to upload".mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];
$cpassword= $_POST['confirmpassword'];


$query = "UPDATE personaldetails SET USERNAME = '$username' ,  PASSWORD = '$password' WHERE AADHARNUMBER = '$AADHAR'";
 
$result = mysqli_query($connection,$query);

if ($result){
	header('location:Login.php');
}
else{
	echo('Sorry for the inconvience');
}
}

?>