
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
 <div class="container">
 	<div class="login-box">
 	<div class="row">
 	<div class="col-md-7 login-left">
  		<h2>Inloggen</h2>
 		<form action="validation.php" method="post">
 		<div class="form-group">
 		<label>Gebruikersnaam</label>
 		<input type="text" name="user" class="form-control" required>
 		<div class="form-group">
 		<label>Wachtwoord</label>
 		<input type="password" name="password" class="form-control" required>
 	</div>
     <button type="submit" class="btn btn-primary">Login
     </button>
   </form> 
 </div>

	<div class="row">
 	<div class="col-md-12 login-right">
 		<h2>Registreren</h2>
 		<form action="registration.php" method="post">
 		<div class="form-group">
 		<label>Gebruikersnaam</label>
 		<input type="text" name="user" class="form-control" required>
 		<div class="form-group">
 		<label>Wachtwoord</label>
 		<input type="password" name="password" class="form-control" required>
 	</div>
     <button type="submit" class="btn btn-primary">Registreer
     </button>
   </form> 
 </div>

</div>
 </div>
</body>
</html>