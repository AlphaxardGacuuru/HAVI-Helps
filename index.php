<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>HAVI Helps Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" value="">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-image:url('tumblr_n04tvkBs331r0jdk7o1_500.gif')">
  <fieldset style="text-align: center; padding-top: 10%; padding-bottom: 10%; width: 100%; height: 80%">
    <div class="container-fluid">
      <h1 style="text-align: center; font-size: 300%;">HAVI HELPS</h1>
      <h1>Sign in</h1>
      <form action="index.php" method="POST">
        <?php include('errors.php'); ?>
        <div class="form-group">
          <label><input type="text" class="form-control" name="username" placeholder="Enter Username"></label>
          <br>
          <label><input type="password" class="form-control" name="password" placeholder="Enter Password"></label>
          <br>
        </div>
        <button type="" name="login_user" class="btn btn-sm btn-success">Login &rtrif;</button>
        <br>
        <br>
        <a href="#">forgot password?</a><br><br>
        <button class="btn btn-sm btn-danger"><a href="Sign_up.php" style="color: white;">Sign Up</a></button>
      </div>
    </form>
  </fieldset>
</body>
</html>