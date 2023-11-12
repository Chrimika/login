<?php
session_start();
if(!isset($_SESSION['username'])){
	header('Location: pages/login.php');
	exit();
}
?>
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
	<div class="d-flex flex-column justify-content-center align-items-center vh-100"  >
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
			<h4 class="display-1 fs-1" >Welcome <?php echo $_SESSION['username']?></h4>
			

			<p>Nom : <?php echo $_SESSION['fname']?></p>
			<p>ID : <?php echo $_SESSION['id']?></p>
			<p>Nom utilisateur : <?php echo $_SESSION['username']?></p>
			<a href="php/logout.php" class="btn btn-dark">logout</a>
	</div>
</body>
</html>