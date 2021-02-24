<?php
   $uname = "admin";
   $pwd = "admin";
   session_start();
   $error = "username or password is incorrect!";
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: orange;
  font-size:24px;
  padding: 8px 12px;
  position: absolute;
  bottom: 40px;
 }
 .textx {
  color: orange;
  font-size:24px;
  padding: 8px 12px;
  position: absolute;
  bottom: 40px;
  margin-left: 500px;
 }
 .texty {
  color: orange;
  font-size:24px;
  padding: 8px 12px;
  position: absolute;
  bottom: 40px;
  margin-left: 970px;
 }
.text1 {
  color: #e68a1a;
  font-size: 56px;
  padding: 8px 12px;
  position: absolute;
  top: 200px;
  width: 100%;
  text-align: center;
}
.text1:hover {
  color:white;
}
 a:hover{
  color:white;
}
.but {
  color: gold;
  position: absolute;
  top: -15px;
  left: 5px;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 2px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: none;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  .text {
  width: 30%;
  font-size: 11px;
 }
 .text1 {
  font-size: 30px;
  width: 100%;
 }
}
</style>
</head>
<body>
<div class="slideshow-container">
<?php
if(isset($_SESSION['uname'])){
}
else{
    if($_POST['uname'] == $uname  && $_POST['pwd'] == $pwd){
            $_SESSION['uname'] = $uname;
            echo "<script>location.href='welcome.php'</script>";
    }
    else{
         //echo "<script>alert('username or password incorrect!')</script>";
         $_SESSION["error"] = $error;
         echo "<script>location.href='index.php'</script>";
    }
}
?>
<div class="mySlides fade">
   <img src="./images/image4.jpg" style="width:100%; height: 640px;">
  <div class="text1"><?php echo "<h1>Welcome ".$_SESSION['uname']."</h1>";
?></div>
<div class="text"> <?php echo "<br><a href='success.php'><input type=button value='Click to see main interface' name=success style='background-color:black;color:gold; padding:10px;font-size: 25px;cursor:pointer;
'></a>";?></div>
<div class="textx"> <?php echo "<br><a href='records.php'><input type=button value='Click to see daily records' name=records style='background-color:black;color:gold;padding:10px;font-size: 25px;cursor:pointer;
'></a>";?></div>
<div class="texty"> <?php echo "<br><a href='analysis.html'><input type=button value='Click to see monthly analysis' style='background-color:black;color:gold;padding:10px;font-size: 25px;cursor:pointer;
'></a>";?></div>
<div class="but"> <?php echo "<br><a href='logout.php'><input type=button value=Logout name=logout style='width:90px; background-color:black; color: gold; padding:4px;font-size: 20px;cursor: pointer;'></a>";?></div>
</div>

<div class="mySlides fade">
   <img src="./images/image5.jpg" style="width:100%; height: 640px;">
<div class="text1"><?php echo "<h1>Welcome ".$_SESSION['uname']."</h1>";
?></div>
<div class="text"> <?php echo "<br><a href='success.php'><input type=button value='Click to see main interface' name=success style='background-color:black; color: gold; padding:10px;font-size: 25px;  cursor: pointer;
'></a>";?></div>
<div class="textx"> <?php echo "<br><a href='records.php'><input type=button value='Click to see daily records' name=records style='background-color:black;color:gold; padding:10px;font-size: 25px;cursor:pointer;
'></a>";?></div>
<div class="texty"> <?php echo "<br><a href='analysis.html'><input type=button value='Click to see monthly analysis' style='background-color:black;color:gold;padding:10px;font-size: 25px;cursor:pointer;
'></a>";?></div>
<div class="but"> <?php echo "<br><a href='logout.php'><input type=button value=Logout name=logout style='width:90px; background-color:black; color: gold; padding:4px;font-size: 20px;cursor: pointer;'></a>";?></div>
</div>

<div class="mySlides fade">
   <img src="./images/image6.jpg" style="width:100%; height: 640px;">
<div class="text1"><?php echo "<h1>Welcome ".$_SESSION['uname']."</h1>";
?></div>
<div class="text"> <?php echo "<br><a href='success.php'><input type=button value='Click to see main interface' name=success style='background-color:black; color: gold; padding:10px;font-size: 25px;  cursor: pointer;
'></a>";?></div>
<div class="textx"> <?php echo "<br><a href='records.php'><input type=button value='Click to see daily records' name=records style='background-color:black;color:gold; padding:10px;font-size: 25px;cursor:pointer;
'></a>";?></div>
<div class="texty"> <?php echo "<br><a href='analysis.html'><input type=button value='Click to see monthly analysis' style='background-color:black;color:gold;padding:10px;font-size: 25px;cursor:pointer;
'></a>";?></div>
<div class="but"> <?php echo "<br><a href='logout.php'><input type=button value=Logout name=logout style='width:90px; background-color:black; color: gold; padding:4px;font-size: 20px;cursor: pointer;'></a>";?></div>
</div>
</div>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>

</body>
</html> 