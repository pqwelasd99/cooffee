<?php 
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "arwa";
$con = mysqli_connect($host,$user,$password,$db);
if(mysqli_connect_error()){
	echo "Connection Error:" . mysqli_connect_error();}
	$error = "";
	if(isset($_POST['submit'])){
		if(empty($_POST['name'])|| empty($_POST['pass1'])){
		echo	$error = "please fill the blank";
		}else{ $sql= "SELECT * from boshra WHERE(name='$_POST[name]') and pass1='$_POST[pass1]'";
		$result = mysqli_query($con,$sql) or die(mysqli_error($con));
		$row= mysqli_fetch_array($result);
		if($row){
			$_SESSION['name'] = $row['name'];
			$_SESSION['pass1'] = $row['pass1'];
			$_SESSION['id'] = $row['id'];
			header("location:project.php");
		}else {
		echo	$error="the user name or password wrong!";}}}
			?>
            
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>LOG IN</title>
</head>
<body style="background-color: #fff5ee">
<br><br><br><br><br><br>
<center>
<form method="POST" style="border:solid; border-color: darkred; height: 300px; width: 330px;">
<h2> log in </h2> <br><br>
user name: 
<input type="text" name="name" placeholder="user name"> <br><br>
password: 
<input type="password" name="pass1" placeholder="password"><br><br>
&ensp;<input type="submit"  name="submit" value="log in"  ><br><br> 
	<a href="up.php"> Don’t have account </a>
</form>
</center><br><br>
	<center> <a href="project.php">Home page <img src="home.svg" height="20px" width="20px"></a></center>
</body>
</html>

