<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="d-flex justify-content-center align-items-center vh-100"  >

		<form class="shadow w-450 p-3" action="php/signup.php" method="post">
			<h4 class="display-4 fs-1" >Create Account</h4>
			<?php if(isset($_GET['error'])){ ?>
			<div class="alert alert-danger" role="alert">
			<?php echo $_GET['error']; ?>
			</div>
			<?php } ?>

			<?php if(isset($_GET['success'])){ ?>
			<div class="alert alert-success" role="alert">
			<?php echo $_GET['success']; ?>
			</div>
			<?php } ?>

			<div class="mb-3">
			    <label class="form-label">Full Name</label>
			    <input type="text"
			    		class="form-control"
			    		name="fname" 
			    		value="<?php echo(isset($_GET['fname']))? $_GET['fname']:"" ?>">
			</div>

			<div class="mb-3">
			    <label class="form-label">User Name</label>
			    <input type="text"
			    		class="form-control"
			    		name="uname" 
			    		value="<?php echo(isset($_GET['uname']))? $_GET['uname']:"" ?>">
			</div>

			<div class="mb-3">
			    <label class="form-label">Passward</label>
			    <input type="Passward" 
			    		class="form-control"
			    		name="pass" 
			    		value="<?php echo(isset($_GET['pass']))? $_GET['pass']:"" ?>">
			</div>

			<button type="submit" class="btn btn-primary">Sign Up</button>
			<a href="login.php" class="link-secondary">Login</a>
		</form>
	</div>
</body>
</html>