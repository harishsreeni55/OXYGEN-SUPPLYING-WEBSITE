<html>
<head>
<title>Verification</title>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'>
</head>
<body>

<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
  <a class='navbar-brand' href='#'>Admin</a>
  <div class='collapse navbar-collapse' id='navbarNav'>
    <ul class='navbar-nav'>
	<li class='nav-item'>
        <a class='nav-link' href='admin.php'>Home</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='toverify.php'>Verification</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='tocylinder.php'>Add Cylinder</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='eventAdmin.php'>History</a>
      </li>
	<li class='nav-item'>
        <a class='nav-link' href='Login.php'>Logout</a>
      </li>
    </ul>
  </div>
</nav>
<br>
<br>

</div class="container">
<table width = '70%' border = '6px' align = 'center' class='table table-bordered'>
<thead class='thead-dark'>
<th>USERNAME</th>
<th>SRF</th>
<th>ADDRESS</th>
<th>LANDMARK</th>
<th>PHONE NUMBER</th>
<th>ACTION</th>
</thead>
<?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "oxygen_supply";  

$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
}


$status = 'PENDING';
$result = mysqli_query($con,"SELECT * FROM srf WHERE  STATUS = '$status'");

$count = mysqli_num_rows($result);  

if ($count > 0){
	
while($row = mysqli_fetch_array($result))	
{
echo "<tr scope='row'>";
echo "<td>" . $row['USERNAME'] . "</td>";
echo "<td>" . $row['SRFNUMBER']. "</td>";
echo "<td>" . $row['ADDRESS']  . "</td>";
echo "<td>" . $row['LANDMARK']  . "</td>";
echo "<td>" . $row['PHONENUMBER']  . "</td>";
echo "<td>";
echo("<form action = '#' method = 'post'>
<button type = 'submit' value = '".$row['AADHARNUMBER']."'  name = 'verify'><img src = 'https://previews.123rf.com/images/sarahdesign/sarahdesign1509/sarahdesign150900627/44517835-confirm-icon.jpg' alt = 'submit' height = '25px' width = '25px'></button>
<button type = 'submit' value = '".$row['AADHARNUMBER']."'  name = 'cancel'><img src = 'https://image.flaticon.com/icons/png/512/130/130877.png' alt = 'submit' height ='25px' width = '25px'></button>

	  </form>
	  ");
echo  ("</td>");
echo "</tr>";
}
echo("</table></div>");


if (isset($_POST['verify'])){
	$val   = $_POST['verify'];
	$query = mysqli_query($con,"UPDATE srf SET STATUS = 'VERIFIED' WHERE AADHARNUMBER = '$val'");
	if ($query){

			$query = "SELECT * FROM srf WHERE AADHARNUMBER = '$val'";
			$res   = mysqli_query($con,$query);
			$row   = mysqli_fetch_array($res);
			$userName = $row['USERNAME'];
			$firstname = $row['FIRSTNAME'];
			$date  = date("m-d-y");
			$his   = "VERIFIED THE USER AND INSTALLED THE COMPONENTS" ;
			
			$history = mysqli_query($con,"INSERT INTO history (USERNAME,FIRSTNAME,DATE,HISTORY) VALUES ('$userName','$firstname','$date','$his')");
			header('REFRESH:0');
		}
		else{
			echo("<script>alert('Something Went Wrong in Our Side')</script>");
		
		}
}
elseif (isset($_POST['cancel'])){
	$val   = $_POST['cancel'];
	$query = mysqli_query($con,"DELETE * FROM srf WHERE AADHARNUMBER = '$val'");
	if ($query){
		header('REFRESH:0');
		}
	else{
		echo("<script>alert('Something Went Wrong in Our Side')</script>");
		}
}
}
else{
	echo("</table><center>");
	echo("<font face = 'Verdana' size = '5px'>You don't have any request to verify</font></center>");
}
?>

	
	
