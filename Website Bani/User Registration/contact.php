<?php 

session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
}
?>

<!-- HTML GEDEELTE -->
<!DOCTYPE html>
<html>
<head>

  <title>Home</title>
  <style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
text-align: left;
}

.logoo {
  background-color: yellow;
}
.logo1{
   margin-left: 33px;
}
.welkomm{
  margin-left: 37px;
}
.topnav {
  overflow: hidden;
  background-color: red;

}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 30px 40px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: red;
  color: white;
   text-align: center;
}

.topnav a.active {
  background-color: red;
  color: white;
}


</style>

</head>

<div class="welkom">

 
</div>
</head>
<body>
  <div class="logoo">
    <img src="logo1.png" style="text-align: right;" class="logo1">
  </div>
        
  <div class="topnav">
<div class="welkomm">
  <h1 style="color: white"> Welkom <?php echo $_SESSION['username']; ?> </h1>   
  </div> 

  <a class="active"  href="home.php">Home</a>
     <a href="cart.php">Producten</a>
     <a href="contact.php">Contact</a>
     <a href="loguit.php"> Loguit</a>

</div>
</div>


</body>
</html>