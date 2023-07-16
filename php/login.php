<?php
	if( isset($_POST['uname']) && 
		isset($_POST['pass'])){
		include '../db_conn.php';

		$uname = $_POST['uname'];
		$pass = $_POST['pass'];

		$data = "&uname=".$uname;

		if (empty($uname)) {
			$em = "User name is required";
			header("Location: ../login.php?error=$em&$data");
			exit;
		}elseif (empty($pass)) {
			$em = "Passward is required";
			header("Location: ../login.php?error=$em&$data");
			exit;
		}else {


			$sql = "SELECT * FROM users WHERE username =";
			$stmt = $conn->prepare($sql);
			$stmt->execute([$uname]);

			if($stmt->rowCount() == 1){
				$user = $stmt->fetch();

				$username = $user['username'];
				$password = $user['passward'];
				$fname = $user['fname'];
				$id = $user['id'];
				if($username === $uname){
					if(password_verify($pass, $password)){
						echo "Logged in";
					}else {
						em = "Incorect User name or password";
						header("Location: ../login.php?error=$em&$data");
						exit;
					}
				}else {
					em = "Incorect User name or password";
					header("Location: ../login.php?error=$em&$data");
					exit;
				}

			}else {
				em = "Incorect User name or password";
				header("Location: ../login.php?error=$em&$data");
				exit;
			}

			header("Location: ../login.php?success=Your account has been created successfully");
			exit;
		}
	}
	else {
		header("Location: ../login.php?error=error");
		exit;
	}
?>