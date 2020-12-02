<?php 
$host = "localhost";
$user = "root";
$password = "";
$db = "arwa";
$con = mysqli_connect($host, $user, $password, $db);
if(mysqli_connect_errno()){
echo "Connection Error:" . mysqli_connect_error();
} 
$error="";
if(isset($_POST['submit'])){
	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['pass1']) || empty($_POST['pass2'])  ){
		header("location:up.php?error=empty");
	}
	elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || ($_POST['pass1']!== $_POST['pass2']) ){
		header("location:up.php?error=validmailnotmached");
	}
	elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		header("location:up.php?error=validmail");
	}
			
	elseif($_POST['pass1']!== $_POST['pass2']){
			header("location:signup.php?error=notmach");
		}else{
		$sql_select=" SELECT Email FROM boshra ";
		$result_select=mysqli_query($con,$sql_select)or die(mysqli_error($con));
		
		while($rows=mysqli_fetch_array($result_select)){
			if($rows['email'] == $_POST['email']){
			}else{ 
				header("location:up.php?error=existed");
			}	
			}
						
		$sql="INSERT INTO boshra (name, email, pass1, pass2) VALUES ('$_POST[name]','$_POST[email]','$_POST[pass1]','$_POST[pass2]')";
		$result=mysqli_query($con,$sql) or die(mysqli_error($con));
		header('location: project.php');		
		}
		}
?>







<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
<title>sign up</title>
	<link href="cop.css" rel="stylesheet">
</head>

<body style="background-color: #fff5ee; ">
<center>

<form method="POST">
	<br><br><br><br><br><br><br><br>
	<div style="border:solid; border-color: darkred; height: 300px; width: 330px;">
		<center>Sign up </center><br><br>
user name:
<input type="text" name="name" placeholder="user name"><br><br>
Email:
<input type="email" name="email" placeholder="email"><br><br>
password:
<input type="password" name="pass1"><br><br>
confirm password:
<input type="password" name="pass2"><br><br>
<input type="submit" name="submit" value="sign up">
		<br><br> 
		<a href="log.php"> Do have account </a>
</form>
</div>
</center>
	<br><br>
	<center> <a href="project.php">Home page <img src="home.svg" height="20px" width="20px"></a></center>
</body>
</html>

