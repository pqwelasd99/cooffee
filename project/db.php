

<?php
$host="localhost";
$user="root";
$password="";
$db="flawer";

$con=mysqli_connect($host,$user,$password,$db);
if(mysqli_connect_errno()){
	echo "connection error:".mysqli_connect_error();
}

if(isset($_POST['insert'])){
	$sql="INSERT INTO rose(name,email,phone) VALUES('$_POST[name]','$_POST[email]','$_POST[phone]')";
	$r=mysqli_query($con,$sql) or die(mysqli_error($con));
}
if(isset($_POST['delete'])){
	$sql="DELETE FROM rose(name,email,phone) VALUES('$_POST[name]','$_POST[email]','$_POST[phone]')";
	$r=mysqli_query($con,$sql) ;
	if($r){
		echo "record delete ";
		
	}else {
		echo "error deleting record".mysqli_error($con);
	}
}

?>
<html><head>
	<meta charset="utf-8">
	<title>advertisements </title>
	<link href="cop.css" rel="stylesheet">
	</head>
<body>

	
	<center><br><br><br>
	<form method="post" style="border:solid; border-color: darkred; height: 300px; width: 330px;"><br><br>
		
          To receive advertisements <br>register here <img src="money.svg" height="20px" width="20px">

		<br><br>
		name<input type="text" name="name">
		<br><br>
		Email<input type="email" name="email">
		<br><br>
		Phone<input type="tel" name="phone">
		<br><br>
		<input type="submit" name="insert" value="insert">
		
			<input type="submit" name="delete" value="delete">
	</form></center>
	
	<center> <a href="project.php">Home page <img src="home.svg" height="20px" width="20px"> </a></center>	
	
	
	
	</body>
</html>