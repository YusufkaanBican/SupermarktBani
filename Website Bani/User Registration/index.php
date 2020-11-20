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
.grid-container{
margin: 15px 4px 4px 4px;
  text-align: center;
}

   footer {
      font-family: Arial;
    background: red;
    height: 210px;
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
<div class="aanbieding" style="text-align: center;">
          <img src="aanbieding1.png" width="50%">
        </div>
        <div class="grid-container" style="position: center;">
    <div class="grid-itemm">
      
            <img alt="kip" src="kip.png" width="10%" height="10%">
            <a href="cart.php">Bestel</a>

             <img alt="deo" src="deo.png" width="10%" height="10%"><a href="cart.php">Bestel</a>
              <img alt="wijn" src="wijn.png" width="10%" height="10%"><a href="cart.php">Bestel</a>
               <img alt="pap" src="pap.png" width="10%" height="10%">
               <a href="cart.php">Bestel</a>
        </div>

  <footer>
    <div class="footer">
    </br>
      <h2 style="color: white;"> Bani Supermarkt</h2>
      <p4 style="color: white;">
         Hilversum <br/>
3243 AR Hilversum  <br/>
bani@bani.com  <br/> </p>
 Tel. 035 50 00 000

</br>

  
    </div>
</footer>

</div>

</div>
</body>
</html>