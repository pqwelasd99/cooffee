

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
	<h1 > <center >Coffee maker</center></h1>
	
	</nav>
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div>
	
	
	
<center><img src="rrr.webp" height="226px" width="226px">   &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;       
	<img  src="hhh.webp" height="226px" width="226px">
	
	<pre style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'"> De’longhi Eletta Fully Automatic          Philips Fully Automatic Espresso   </pre>
&ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; 
	&ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; 
	 <input style="background-color: #fff5ee; border: none;" type="text" name="price1" value="1255" readonly>
	
	&ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;&ensp; &ensp; 
	<input style="background-color: #fff5ee; border: none;"  type="text" name="price2" value="770" readonly>
	
	&ensp; &ensp; &ensp; &ensp; &ensp;&ensp; &ensp; &ensp; &ensp;  &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;       
		                        <br><br>
	                         	<input type="number" min="0" max="10" name="a"> 
		                         &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; 
		
	   
		 
		<input type="number" min="0" max="10" name="b">

	
	
		  </div>
		
		
	   
		  
		 
	    <br><br> <br>
	         <div>
		
		
	   
	<center><img src="ddd.webp" height="226px" width="226px">&ensp; &ensp; &ensp; &ensp; &ensp; &ensp;
	<img src="zzz.webp"  height="226px" width="226px">
	<pre style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'" > Technivorm Moccamaster                            Nespresso VertuoPlus</pre>
		&ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;&ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; 
	<input style="background-color: #fff5ee; border: none;"  type="text" name="price3" value="890" readonly>
		&ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;  &ensp; &ensp;   
		<input style="background-color: #fff5ee; border: none;"  type="text" name="price4" value="1499" readonly>
		   &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; 
	
		   
		                       <br><br>
		&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
	                         	<input type="number" min="0" max="10" name="c"> 
		                         &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;   
		
	   
		 
		<input type="number" min="0" max="10" name="d">
		&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
				 </div></center>
		 <br><br><br>
	
	
	<div>
	<center><img src="yyy.png" height="226px" width="226px">&ensp; &ensp; &ensp; &ensp; &ensp; &ensp;
	<img src="red.png"  height="226px" width="226px">
	<pre style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'"> De'Longhi 15 bar Pump Espresso Maker           Nespresso Esenza Mini Coffee Maker, Red </pre>
		 &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;
	<input style="background-color: #fff5ee; border: none;"  type="text" name="price5" value="680" readonly>
		 &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;  
		<input style="background-color: #fff5ee; border: none;" type="text" name="price6" value="770" readonly>
	 &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;
		                     <br><br> &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;
	                         	<input type="number" min="0" max="10" name="e"> 
		                         &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;
		 &ensp; &ensp; &ensp; &ensp; &ensp; 
	   
		 
		<input type="number" min="0" max="10" name="f">  &ensp; &ensp;  &ensp; &ensp;
		 </div></center>
	    <br><br> <br>
	        <center>  <input type="submit" value="Add to bag " name="submit">
	</center>
	</form>
	<center>
	<?php
	if($show){
			echo "<h2> " . "the total is :".$result . "SAR</h2>";
			echo "<h3>". "you have ordered: </h3>";
			echo "<p>".$ac."De’longhi Eletta Fully Automatic";
			echo "<br>".$bc."Philips Fully Automatic Espresso <br>";
		echo "<br>".$cc."Technivorm Moccamaster ". "<br>";
		echo "<br>".$dc."Nespresso VertuoPlus<br>";
		echo "<br>".$ec." De'Longhi 15 bar Pump Espresso Maker <br>";
			echo $fc."Nespresso Esenza Mini Coffee Maker, Red"."</p>";
		}
		else{
			echo "<p> ".$nore."</p>";
		}
	?>
	
			
		</center>
		
		<center> <a href="project.php">Home page <img src="home.svg" height="20px" width="20px"></a></center>		
		
		
		
</body>
</html>