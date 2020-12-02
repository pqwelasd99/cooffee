<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>cup of coffee</title>

	<link href="cop.css" rel="stylesheet">

</head>
	<?php
$show=false;
$result=$a=$b=$c=$d=$e=$f=0;
$ac=$bc=$cc=$dc=$ec=$fc=0;
$nore="";
if(isset($_POST['submit'])){
if(!empty($_POST['a'])){
$result+=$_POST['a']*$_POST['price1'];
$ac=$_POST['a'];
}
if(!empty($_POST['b'])){
$result+=$_POST['b']*$_POST['price2'];
$bc=$_POST['b'];
}
if(!empty($_POST['c'])){
$result+=$_POST['c']*$_POST['price3'];
$cc=$_POST['c'];
}
if(!empty($_POST['d'])){
$result+=$_POST['d']*$_POST['price4'];
$dc=$_POST['d'];
}
if(!empty($_POST['e'])){
$result+=$_POST['e']*$_POST['price5'];
$ec=$_POST['e'];
}
if(!empty($_POST['f'])){
$result+=$_POST['f']*$_POST['price6'];
$fc=$_POST['f'];
}
}
if($result>0){
$show=true;}
    else{
$nore="your cart is empty ";
}  
?>




<body>
	<form method="post">
	

 <nav>

	<h1 class="h1" >  <center >  Disney Cups</center></h1>
	 <br>

	

	</nav>

	
	<br><br><br><br><br><br><br>
	
	<marquee class="sh">He bought one cup and the other at half the price</marquee>
	<br><br><br><br><br><br><br><br><br><br><br><br>

	

	

<center><img src="d1.jpg" height="300px" width="300px">   &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;       <img src="d2.jpg" height="300px" width="300px">
	
	<p>Disney Cup &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;&ensp;&ensp; &ensp; &ensp; &ensp;&ensp;&ensp; &ensp; &ensp; &ensp;&ensp;&ensp; &ensp; &ensp; &ensp;&ensp;&ensp; &ensp; &ensp; &ensp;&ensp;&ensp;   Disney Cup  </p>
	&ensp; &ensp; &ensp;&ensp;&ensp;&ensp; &ensp; &ensp;&ensp;&ensp;&ensp;&ensp; &ensp; &ensp;
 <input style="background-color: #fff5ee;border: none;" type="text" name="price1" value="111" readonly>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp; &ensp; &ensp;&ensp;&ensp; &ensp; &ensp;&ensp;&ensp;
	
	<input style="background-color: #fff5ee;border: none;" type="text" name="price2" value="134" readonly>
	<br><br>
	&ensp; 
	<input type="number" min="0" max="10" name="a"> &ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp; &ensp;&ensp;&ensp;&ensp; &ensp; &ensp;&ensp;&ensp;&ensp; &ensp; &ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;
	<input class="" type="number" min="0" max="10" name="b">
	<pre style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'">       </pre><br>

	

	     
<br><br>

<img src="d3.jpg" height="300px" width="300px">&ensp; &ensp; &ensp; &ensp; &ensp; &ensp;

	<img src="d4.jpg"  height="300px" width="300px">
	
	<p>Disney Cup &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;&ensp; &ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Disney Cup  </p>
	&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
	 <input  style="background-color: #fff5ee;border: none;" type="text" name="price3" value="114" readonly>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
	<input  style="background-color: #fff5ee;border: none;" type="text" name="price4" value="115" readonly>
<br><br>
	<input type="number" min="0" max="10" name="c"> &ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp; &ensp;
	<input class="" type="number" min="0" max="10" name="d">
	<br><br> 


	

	

	

	

  <img src="d5.jpg"height="300px" width="300px">&ensp; &ensp; &ensp; &ensp; &ensp; &ensp;

  <img src="d6.jpg" height="300px" width="300px">
	
	<p>Disney Cup &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; Disney Cup  </p>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
	 <input  style="background-color: #fff5ee;border: none;" type="text" name="price5" value="156" readonly>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
	<input  style="background-color: #fff5ee;border: none;" type="text" name="price6" value="153" readonly>
<br><br>
	<input type="number" min="0" max="10" name="e"> &ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp; &ensp;
	<input class="" type="number" min="0" max="10" name="f">
	<pre style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'">       </pre><br>

<center><input type="submit" value="Add to bag" name="submit"</center>

</center>

	

	

		

		<center>
<?php
if($show){
echo "<h2> " . "the total is :".$result . "SAR</h2>";
echo "<h3>". "you have ordered: </h3>";
echo "<p>".$ac."Disney Cup ";
echo "<br>".$bc."Disney Cup  <br>";
echo "<br>".$cc."Disney Cup  ". "<br>";
echo "<br>".$dc."Disney Cup <br>";
echo "<br>".$ec." Disney Cup  <br>";
echo $fc." Disney Cup  "."</p>";
}
else{
echo "<p> ".$nore."</p>";
}
?>
</center>	

<center> <a href="project.php">Home page <img src="home.svg" height="20px" width="20px"></a></center>		

		

		

		

</body>

</html>