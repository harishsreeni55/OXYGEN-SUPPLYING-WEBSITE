
<html>
<head>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'>
<title>CYLINDER</title>
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
<div class ='container'>
<br>

<form action = '#' method = 'post'>
<label>username</label>
<input type = 'text' name = 'userid' placeholder = "Username or Firstname" autocomplete = "off">
<input type = 'submit' name = 'submit'>
</form>


<table width = '90%' border = '6px' align = 'center' class='table'>
<th>USERNAME</th>
<TH>FIRSTNAME</th>
<th>CYLINDER(s)</th>

<th>PULSE-OXYMETER(s)</th>
<th>LAST UPDATED</th>
<th>Action</th>
<?php 
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "oxygen_supply";  

$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
}

if (isset($_POST['submit'])){
	$userid = $_POST['userid'];
$result = mysqli_query($con,"SELECT * FROM srf WHERE (USERNAME = '$userid' or FIRSTNAME = '$userid') AND STATUS = 'VERIFIED'");


while($row = mysqli_fetch_array($result)) 
{
echo "<tr>";
echo "<td>" . $row['USERNAME'] . "</td>";
echo "<td>" . $row['FIRSTNAME']. "</TD>";
echo "<td>" . $row['numberOfCylinders'] . "</td>";
echo "<td>" . $row['PULSE'] . "</td>";
echo "<td>" . $row['PREVIOUSDATE'] . "</td>";
echo ("<td> <form action = '#' method = 'post'>
			<button type = 'submit' name = 'add' value = '".$row['AADHARNUMBER']."'><img src = 'https://cdn.dribbble.com/users/159078/screenshots/3018147/output_07opxg.gif' alt = 'submit' height = '25px' width = '25px'></button>
			</form>");
			
echo "</td>";
echo "<tr>";
}
echo("</table></div>");



if (isset($_POST['add'])){
	$aadhar = $_POST['add'];
	echo("$aadhar");
	session_start();
    $_SESSION['xxx'] = $aadhar;
	header("location:signup_2.php");
	
	}
}


else{
$result = mysqli_query($con,"SELECT * FROM srf WHERE STATUS = 'VERIFIED'");


while($row = mysqli_fetch_array($result)) 
{
echo "<tr>";
echo "<td>" . $row['USERNAME'] . "</td>";
echo "<td>" . $row['FIRSTNAME']. "</TD>";
echo "<td>" . $row['numberOfCylinders'] . "</td>";

echo "<td>" . $row['PULSE'] . "</td>";
echo "<td>" . $row['PREVIOUSDATE'] . "</td>";
echo ("<td> <form action = '#' method = 'post'>
			<button type = 'submit' name = 'add' value = '".$row['AADHARNUMBER']."'><img src = 'https://cdn.dribbble.com/users/159078/screenshots/3018147/output_07opxg.gif' alt = 'submit' height = '25px' width = '25px'></button>
			</form>");
			
echo "</td>";
echo "<tr>";
}
echo("</table></div>");



if (isset($_POST['add'])){
	$aadhar = $_POST['add'];
	echo("$aadhar");
	session_start();
    $_SESSION['xxx'] = $aadhar;
	header("location:signup_2.php");
	
	}
}
?>