<!D0CTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.slidecontainer {
    width: 100%;
}
.slider{ 
-webkit-appearance: none;
width: 100%;
height: 25px;
background: #d3d3d3;
outline: none;
opacity: 0.7;
-webkit-transition: opacity .2s;
transition: opacity  .2s;
}
.slider::-webkit-slider-thumb {
-webkit-appearance: none;
appearance: none;
width: 25px;
height: 25px;
background: #04AA6D;
cursor: pointer;
}
.slider::-moz-range-thumb {
width: 25px;
height: 25px;
background: #04AA6D;
cursor: pointer;
}
</style>
</head>
<body>
<form method="POST" action ="<?php echo $_SERVER['PHP_SELF'];?>">
<h1>Robot Control</h1>
<div class="slidercontainer">
<p>motor1</p>
<input type ="range" min="0" max="180" value="0"  class="slider" id="myRange1" name = "m1">
<p id=1 class="Myvalue">the corner <span id="demo1" ></span></p>
</div>
<script>
var myRange1 = document.getElementById("myRange1");
var demo1 = document.getElementById("demo1");
demo1.innerHTML = myRange1.value;
myRange1.oninput = function (){
	demo1.innerHTML = this.value;
}
</script>
<div class="slidercontainer">
<p>motor2</p>   
<input type ="range" min="0" max="180" value="0" class="slider" id="myRange2" name="m2">
<p id=2 class="Myvalue">the corner <span id="demo2" ></span></p> 
</div>
<script>
var myRange2 = document.getElementById("myRange2");
var demo2 = document.getElementById("demo2");
demo2.innerHTML = myRange2.value;   
myRange2.oninput = function (){
	demo2.innerHTML = this.value;
}
</script>
<div class="slidecontainer">
<p>motor3</p>  
<input type ="range" min="0" max="180" value="0" class="slider" id="myRange3" name ="m3">
<p id=3 class="Myvalue">the corner <span id="demo3" ></span></p>   
</div>
<script>
var myRange3 = document.getElementById("myRange3");
var demo3 = document.getElementById("demo3"); demo3
demo3.innerHTML = myRange3.value;  
myRange3.oninput = function (){
	demo3.innerHTML = this.value;
}
</script>
<div class="slidecontainer">
<p>motor4</p>
<input type ="range" min="0" max="180" value="0" class="slider" id="myRange4" name ="m4">
<p id=4 class="Myvalue">the corner <span id="demo4" ></span></p>
</div>
<script>
var myRange4 = document.getElementById("myRange4");
var demo4 = document.getElementById("demo4");
demo4.innerHTML = myRange4.value;
myRange4.oninput = function (){
	demo4.innerHTML = this.value;
}
</script>
<div class="slidecontainer">
<p>motor5</p>
<input type ="range" min="0" max="180" value="0" class="slider" id="myRange5" name ="m5">
<p id=5 class="Myvalue">the corner <span id="demo5" ></span></p>
</div>
<script>
var myRange5 = document.getElementById("myRange5");
var demo5 = document.getElementById("demo5");  demo5
demo5.innerHTML = myRange5.value;
myRange5.oninput = function (){
	demo5.innerHTML = this.value;
}
</script>
<div class="slidercontainer">
<p>motor6</p>
<input type ="range" min="0" max="180" value="0" class="slider" id="myRange6" name="m6">
<p id=6 class="Myvalue">the corner <span id="demo6" ></span></p>
</div>
<script>
var myRange6 = document.getElementById("myRange6");
var output = document.getElementById("demo6");
demo6.innerHTML = myRange6.value;
myRange6.oninput = function (){    
	demo6.innerHTML = this.value;
}
</script>
		</detalist>
					<p>  </p>
					<input type="submit" id="save" value="حفظ"></input>  	
</div>
</form>
</body>
</html>	
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db1="test";
 
try{
	$conn =new
	 
	$conn->setAttribute(PDO::ATTR_ERRMODE, 
	PDO::ERRMODE_EXCEPTION);
	$conn->beginTransaction();
}

catch(PDOException $e){
	// roll back the transition if something failed 
	$conn->rollback();
	echo "Error: ".$e->getMessage();
}
if ($_SERVER["REQUEST_METHOD"]=="POST"){
	//our SQL statements
	PDO("mysql:host=$servername;dbname=$db1",$username); 
	$conn->commit();
	$motor1=$_POST['m1'];  
$motor2=$_POST['m2'];
$motor3=$_POST['m3'];
$motor4=$_POST['m4'];
$motor5=$_POST['m5'];
$motor6=$_POST['m6'];

echo "NEW records created successfully";}

$conn = null;
?>