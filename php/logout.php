<?php
session_start();
if(isset($_SESSION['username'])){
	session_destroy();
	header("Location: ../pages/login.php");
	exit();
}
?>