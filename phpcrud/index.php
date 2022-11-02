<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign up/ Login</title>
  <link rel="stylesheet" href="./body.css">

</head>
<body>
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar body.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="signup">
				<form action="regis.php" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="username" id="username" placeholder="User name" required="">
					<input type="password" name="password" id="password"placeholder="Password" required="">
                    <input type="password" name="cpassword" placeholder="Konfirmasi Password" required="">
					<button name="register" id="register">Sign up</button>
				</form>
			</div>
			<div class="login">
				<form action="process.php" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="username" placeholder="username" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit" name="submit" id="submit">Login</button>
				</form>
			</div>
	</div>
</body>
</html>
</body>
</html>
