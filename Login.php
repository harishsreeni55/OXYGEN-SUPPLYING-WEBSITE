<html>
<head>
<link rel="stylesheet" href="Style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>LOGIN</title>
<style>

</style>
</head>
<body>
<form class="Login_box" method = "POST"  action = "#">
<div class="navbar">
                    <a class="active" href="Login.php">LOGIN</a>
                    <a href="test2.html">SIGN UP</a>
            </div>
<div class="icon_set">
                <i class="fa fa-user icon" style="font-size: 40px"></i>
				<input type = 'text' placeholder = "Username" id = "user" autocomplete = 'off' name = "user" required><br>
</div>
<div class="icon_set">
                <i class="fa fa-lock icon" style="font-size: 40px"></i>
				<input type = 'password' placeholder = "Password" id = "pass" autocomplete = 'off' name = "pass" required><br>
</div>
<input type = "submit" name = "submit">
</form>
</body>     
</html>  

<?php      
	if(isset($_POST['submit']))
	{
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "oxygen_supply";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_error()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

	$userna = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $userna = stripcslashes($userna);  
        $password = stripcslashes($password);  
        $userna = mysqli_real_escape_string($con, $userna);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from personaldetails where USERNAME = '$userna' and PASSWORD = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count > 0){  
            session_start();
			$_SESSION['user'] = $userna;
			if ($userna == 'ADMIN'){
			header('location:Admin.php');}
			else {
				header('location:home.php');
			}
			
			}  
        else{  
            echo "<script>alert('Incorrect Username or Password');</script>";  
        }     
    }
	else{
		//echo('Fill the crecintial');
	}
?>  
	
  
</body>
</head>
</html>
