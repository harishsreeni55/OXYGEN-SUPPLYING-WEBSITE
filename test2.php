

<?php

if(isset($_POST['submit'])){
$host ='localhost';
$user = 'root';
$password = '';
$db_name = 'oxygen_supply';

$connection = mysqli_connect($host,$user,$password,$db_name);

if(mysqli_connect_error()){
	die('Failed to upload'.mysqli_connect_error());
}

$fname  = $_POST['FIRST_NAME'];      
$lname  = $_POST['LAST_NAME'];
$dob    = $_POST['DOB'];
$father = $_POST['FATHER_NAME'];
$mother = $_POST['MOTHER_NAME'];
$AADHAR = $_POST['aadhar_number'];
$district= $_POST['district'];
$town   = $_POST['TOWN'];
$area = $_POST['AREA_NAME'];
$street = $_POST['STREET_NAME'];
$door_no = $_POST['DOOR_NAME'];
$lmark = $_POST['Land_mark'];
$size = $_POST['size_population'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];	
$zip  = $_POST['zipcode'];
        
$query = "INSERT INTO personaldetails (FIRSTNAME,LASTNAME,DATEOFBIRTH,FATHERNAME,MOTHERNAME,AADHARNUMBER,DISTRICT,TOWN,AREA,STREET,DOORNUMBER,LANDMARK,POPULATIONCATEGORY,ZIPCODE,PHONENUMBER,EMAILID)	VALUES	('$fname','$lname','$dob','$father','$mother','$AADHAR','$district','$town','$area','$street','$door_no','$lmark','$size','$zip','$phone_number','$email')";

$result = mysqli_query($connection, $query);  
if ($result){
	session_start();
	$_SESSION['aadhar'] = $AADHAR; 
	header('Location:test1.php');
	echo('successfully entered');	
	}
else{
	echo('fail');
}

mysqli_close($connection);
}
?>