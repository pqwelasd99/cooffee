

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>wake cup</title>
<link rel="stylesheet" href="projectstyel.css">
</head>

<body>
	
	<nav>
			<ol>
				<li><a href="coffee.php"> Coffee maker </a> </li>&ensp;&ensp;
				<li><a href="Disney Cups.php"> Disney Cups </a></li>&ensp;&ensp;
				<li><a href="clasicarwa.php"> Classic Cups </a> </li>&ensp;&ensp;
                <li><a href="beans.php">Beans</a> </li>&ensp;&ensp;
				<li> <a href="tool.php" > tools </a></li>&ensp;&ensp;
                <li> <a href="up.php"> sign up </a></li>&ensp;&ensp;
                 <li> <a href="db.php"> Ads </a></li>&ensp;&ensp;
				<li><a href="log.php">log in </a> </li>&ensp;&ensp;
				
                 
			</ol>
		<br>
 <img class="logo" src="logo.jpg" alt="logo" height="200px" width="200px"><br><br>
		</nav>	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
	
	
	<b><center>
<font size="14">
<script>

// ********** عدل هنا

var text=" Offers & Discounts" 
var speed=100 // سرعه تغير الالوان

// ********** لا تعدل شي هنا


if (document.all||document.getElementById){
document.write('<span id="highlight">' + text + '</span>')
var storetext=document.getElementById? document.getElementById("highlight") : document.all.highlight
}
else
document.write(text)
var hex=new Array("00","14","28","3C","50","64","78","8C","A0","B4","C8","DC","F0")
var r=1
var g=1
var b=1
var seq=1
function changetext(){
rainbow="#"+hex[r]+hex[g]+hex[b]
storetext.style.color=rainbow
}
function change(){
if (seq==6){
b--
if (b==0)
seq=1
}
if (seq==5){
r++
if (r==12)
seq=6
}
if (seq==4){
g--
if (g==0)
seq=5
}
if (seq==3){
b++
if (b==12)
seq=4
}
if (seq==2){
r--
if (r==0)
seq=3
}
if (seq==1){
g++
if (g==12)
seq=2
}
changetext()
}
function starteffect(){
if (document.all||document.getElementById)
flash=setInterval("change()",speed)
}
starteffect()
</script>
</font></b></center>
</font></p>
	
	
	

	


<br><br><br>
         
<center>
<marquee>
<img src="asd.jpg" height="200px" width="200px">
<img src="bnm.png" height="200px" width="200px">
	
<img src="c3.jpg" height="200px" width="200px">
											   
<img src="d3.jpg" height="200px" width="200px">
<img src="d5.jpg" height="200px" width="200px">
</marquee>
<br><br><br><br><br><br>
<h2> WHAT MAKE YOU WAKE UP? ☕</h2>
<iframe width="560" height="315" src="https://www.youtube.com/embed/oJtpEPAVDq0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br><br><br><br><br><br><br><br>

<img src="twtt.png" width="60px" height="60px">&ensp;&ensp;
<img src="images44.jpg" width="60px" height="60px">
<p> twitter & instagram account: wakecup </p>
</center>

</body>
</html>