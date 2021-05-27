-<html>
<head>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x' crossorigin='anonymous'>
<title>Events</title>
<style>
/*input[type = "text"]{
        text-align: center;
    background: black;
    border: 4px solid lime;
    padding: 14px 10px;
    width: 300px;
    color: white;
    border-radius:24px;
    outline:none;
    transition: 0.20s;
    font-family:"cooper";
    
}

input[type = "submit"]{
        background : black;
        color:black;
}       
input[type = "submit"]:hover,input[type = "reset"]:hover
{
    width:110;
    background: black;
    color:whitesmoke;
}
input[type = "submit"],input[type = "reset"]{
    margin: 20px 20px;
    text-align: center;
    display : inline;
    background: none;
    border: 2px solid Gray ;
    padding: 14px 10px;
    color: white;
    width:100px;
    border-radius:24px;
    outline:none;
    cursor: pointer;
}*/
</style>
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
<div class="container">
<form action = '#' method = 'post'>
<br>
<br>
<label></label>
<input type = 'text' name = 'userid' placeholder = "Username or Firstname">
<input type = 'submit' name = 'submit'>
</form>

<table width = '90%' border = '6px' align = 'center' class="table">
<thead>
<th>USERNAME</th>
<th>FIRSTNAME</th>
<th>HISTORY</th>
<th>DATE</th>
<thead>
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

$result = mysqli_query($con,"SELECT * FROM history WHERE  (USERNAME = '$userid' or FIRSTNAME = '$userid')"); 

while($row = mysqli_fetch_array($result))
	
{

echo "<tr>";
echo "<td>" . $row['USERNAME'] . "</td>";
echo "<td>" . $row['FIRSTNAME']. "</td>";
echo "<td>" . $row['HISTORY'] . "</td>";
echo "<td>" . $row['DATE'] . "</td>";
echo "</tr>";
}
echo("</table>");
}	

else{

$result = mysqli_query($con,"SELECT * FROM history ");
$count = mysqli_num_rows($result);  

while($row = mysqli_fetch_array($result))
	
{

echo "<tr>";
echo "<td>" . $row['USERNAME'] . "</td>";
echo "<td>"	. $row['FIRSTNAME']. "</td>";
echo "<td>" . $row['HISTORY'] . "</td>";
echo "<td>" . $row['DATE'] . "</td>";
echo "</tr>";
}
echo("</table></div>");
}
	
?>




















































