
<html>
<head>
<title>SRF</title>
<link rel="stylesheet" href="Style1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'>
</head>
<body>
<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
  <a class='navbar-brand' href='#'>Oxygen</a>
  <div class='collapse navbar-collapse' id='navbarNav'>
    <ul class='navbar-nav'>
	<li class='nav-item'>
        <a class='nav-link' href='home.php'>Home</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='SRF.php'>SRF</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='event.php'>History</a>
      </li>
    </ul>
  </div>
</nav>
<form  class="Signup_box" action ="#" method = "Post" >

<label name = "test">Do you have BP:</label><br>
<input type="radio" id="test" name="test" value="Yes" required>
<label for="male">Yes</label><br>
<input type="radio" id="test" name="test" value="No">
<label for="female">No</label><br>

<label name = "diabetic">Are you Diabetic:</label><br>
<input type="radio" id="test" name="diabetic" value="Yes" required>
<label for="male">Yes</label><br>
<input type="radio" id="test" name="diabetic" value="No">
<label for="female">No</label><br>

<label name = "test">Due you have any respiratory issues:</label><br>
<input type="radio" id="resp" name="resp" value="Yes" required>
<label for="male">Yes</label><br>
<input type="radio" id="resp" name= "resp" value="No">
<label for="female">No</label><br>

<label name = "srf" id = "srf" name = "srf">
ENTER YOUR SRF NUMBER:
</label><br>
<input type = "text"  name = "srf" id = "srf" placeholder = "Enter your Recent SRF Number" autocomplete = 'off' required>
</label>
<br>
<input type = "submit"  name ="submit">
</form>
</body>
</html>
<?php 
session_start();
$userName = $_SESSION['user'];


if(isset($_POST['submit'])){

$testResult = $_POST['test'];
$diabetic   = $_POST['diabetic'];
$issues     = $_POST['resp'];
$srf  		= $_POST['srf'];


$host ='localhost';
$user = 'root';
$password = '';
$db_name = 'oxygen_supply';

$connection = mysqli_connect($host,$user,$password,$db_name);

$query = "SELECT * FROM personaldetails WHERE USERNAME = '$userName'";
$res   = mysqli_query($connection,$query);
$row   = mysqli_fetch_array($res);

$r     = $row['AADHARNUMBER'];
$address = $row['DOORNUMBER'].','.$row['STREET'].','.$row['AREA'];
$landmark     = $row['LANDMARK']; 
$phone  = $row['PHONENUMBER'];
$name   = $row['FIRSTNAME'];

if(mysqli_connect_error()){
	die("Failed to upload".mysqli_connect_error());
}
$date = date('m-d-y');
$q = "INSERT INTO srf (USERNAME,bloodPressure,diabeticIssues,respiratoryIssues,AADHARNUMBER,SRFNUMBER,PHONENUMBER,LANDMARK,ADDRESS,FIRSTNAME,PREVIOUSDATE) VALUES ('$userName','$testResult','$diabetic','$issues','$r','$srf','$phone','$landmark','$address','$name','$date')";
$result = mysqli_query($connection,$q);
if ($result){
	echo("<script>alert('Sucessfully entered wait for our call')</script>");
	header("0:reload");
	}
else
{
	echo("<script>alert('Something Went Wrong in Our Side')</script>");

}

}
?>
