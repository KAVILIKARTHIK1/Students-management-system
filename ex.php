<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<?php
	if(isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(($username=='NECNELLORE')&&($password=='NECN@123')) {
			header('Location: admin.php');
		}
		else if(preg_match('/^[a-zA-Z0-9_]{5,15}$/', $username) && preg_match('/^[a-zA-Z0-9!@#$%^&*()_+-=]{8,20}$/', $password)) {
			if(isset($_POST['login'])) {
				header('Location: studentinfo.php');
			}
		}
		else {
			echo "alert('WRONG INFORMATION')";
			die();
		}
	}	
	?>

	<div class="container">
		<marquee width="100%" behavior="alternate" direction="right" height="25PXpx" class="marq">
			STUDENT INFORMATION LOGIN
		</marquee>
		<form  method="post">
			<div class="form-group">
				<label for="username"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required>
			</div>

			<div class="form-group">
				<label for="password"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>
			</div>

			<button type="submit" name="login">Login</button>
			<label>
				<input type="checkbox" checked="checked" name="remember"> Remember me
			</label>
		</
