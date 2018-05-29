<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>HAVI Helps Sign Up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="keywords" value="">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<fieldset style="text-align: center;">
		<h1>Create an account</h1>
		<h2>It's free</h2>
		<br>
		<br>
		<form action="Sign_up.php" method="POST">
			<?php include('errors.php'); ?>
			<div class="form-group">
				<label><input type="text" class="form-control" name="username" placeholder="Username"></label>
				<br>
				<label><input type="email" class="form-control" name="email" placeholder="Email"></label>
				<br>
				<label><input type="password" class="form-control" name="password_1" placeholder="New Password"></label>
				<br>
				<label><input type="password" class="form-control" name="password_2" placeholder="Confirm Password"></label>
				<br>
				<br>
				<button type="submit" name="reg_user" class="btn btn-sm btn-success">Create account</button><span style="padding-left: 1%">or</span><a href="index.php" style="padding-left: 1%">Sign in</a>
				<br>
				<p><span style="font: 50%;">By clicking Create an account, you agree to our <a href="#">Terms of use</a>, including our <a href="#">Cookie Use</a> and <a href="#">Privacy Policy</a>.</span></p>
				<button type="reset" class="btn btn-sm btn-danger">Reset</button>
			</div>
		</form>
	</fieldset>
</body>
</html>