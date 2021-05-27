<?php
session_start();
$username = $_SESSION['username'];


echo ("<html>
<head>
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
</nav>");

echo("
<br>");
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "oxygen_supply";  
      
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
}

echo("
<table id = 'myTable' align = 'center' class='table table-bordered'width = '90%' border = '6px'>
<thead class='thead-dark'>
<th scope='col'>HISTORY</th>
<th scope='col'>DATE</th>
");
$result = mysqli_query($con,"SELECT * FROM history WHERE USERNAME = '$username'");

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['HISTORY'] . "</td>";
echo "<td>" . $row['DATE'] . "</td>";
echo "</tr>";
}
echo("</table>");


?>