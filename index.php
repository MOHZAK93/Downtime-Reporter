<?php
session_start();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;background-image: url("./images/image1.jpg");background-repeat: no-repeat;background-size: cover;}

input[type=text], input[type=password] {
  width: 30%;
  display: block;
  margin: auto;
  padding: 12px 20px;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: gold;
  color: #000;
  padding: 14px 20px;
  display: block;
  margin: auto;
  border: none;
  cursor: pointer;
  width: 30%;
}

button:hover {
  opacity: 0.8;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}
@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  input[type=text], input[type=password] {
  width: 100%;
 }
 button {
  width: 100%;
}
 img.avatar {
  width: 60%;
  margin-bottom:50px;
 }
}
</style>
</head>
<body>
<form action="welcome.php" method="post">
  <div class="imgcontainer">
    <img src="./images/avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
     <input type="text" placeholder="Enter Username" name="uname" required>

     <input type="password" placeholder="Enter Password" name="pwd" required style='margin-top:15px;'>
     <?php
    if(isset($_SESSION["error"])){
        $error = $_SESSION["error"];
        echo "<span style='color:red;text-align:center;display: block;'>$error</span>";
    }
?>  
    <button type="submit" style='margin-top:25px;'>Login</button>
  </div>
</form>
</body>
</html>
<?php
    unset($_SESSION["error"]);
?>