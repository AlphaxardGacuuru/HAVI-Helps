<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="keywords" value="Songs,Pentatonix">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Community</title>
	<style>
	body {
		font-family: "Lato", sans-serif;
	}

	.sidenav {
		height: 100%;
		width: 0;
		position: fixed;
		z-index: 1;
		top: 0;
		left: 0;
		background-color: #111;
		overflow-x: hidden;
		transition: 0.5s;
		padding-top: 90px;
	}

	.sidenav a {
		padding: 8px 8px 8px 32px;
		text-decoration: none;
		font-size: 25px;
		color: #818181;
		display: block;
		transition: 0.3s;
	}

	.sidenav a:hover {
		color: #f1f1f1;
	}

	.sidenav .closebtn {
		position: absolute;
		top: 50px;
		right: 25px;
		font-size: 36px;
		margin-left: 50px;
	}

	@media screen and (max-height: 450px) {
		.sidenav {padding-top: 15px;}
		.sidenav a {font-size: 18px;}
	}
	#main {
		transition: margin-left .5s;
		padding: 20px;
	}

</style>
<script>
	function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
		document.getElementById("main").style.marginLeft = "250px";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("main").style.marginLeft = "0";
	}
</script>
</head>
<body>
	<div id="main">
		<div id="mySidenav" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="Home.php"><span style="float: left; padding-right: 20px;" class="fa fa-home"></span>Home</a>
			<a href="#"><span style="float: left; padding-right: 20px;" class="fa fa-users"></span>Community</a>
			<a href="#"><span style="float: left; padding-right: 20px;" class="fa fa-shopping-cart"></span>Shopping Cart</a>
			<a href="#"><span style="float: left; padding-right: 20px;" class="fa fa-list"></span>My List</a>
		</div>
		<nav class="navbar navbar-inverse navbar-static-top navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<span style="color: white; font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
				</div>
				<ul class="nav navbar-nav">
					<form class="navbar-form" action="/action_page.php">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="HAVI Helps" style="width: 600px">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</div>
						</div>
						<button type="button" class="btn btn-sm btn-default" data-toggle="modal" data-target="#myModal"><span class="fa fa-send"></span></button>
					</form>
				</ul>
				<span class="drop-down">
					<img src="male_avatar.jpg" style="float: right; vertical-align: bottom; padding-top: 0.5%; padding-bottom: 0.5%; width: 2.5%; height: 2.5%; border-radius: 50%;" alt="avatar" class="avatar dropdown-toggle" data-toggle="dropdown">
					<ul class="dropdown-menu dropdown-menu-right">
						<li class="dropdown-header"><a href="index.php">
							<div><b style="">User</b></div><span>User@User.</span></li>
							<li class="divider"></li>
							<li><a href="index.php"><span style="float: left; padding-right: 20px;" class="glyphicon glyphicon-"></span>Settings</a></li>
							<li><a href="index.php"><span style="float: left; padding-right: 20px;" class="glyphicon glyphicon-"></span>Help</a></li>
							<li class="divider"></li>
							<li><a href="index.php"><span style="float: left; padding-right: 20px;" class="glyphicon glyphicon-"></span>Sign out</a></li>
						</ul>
					</span>
				</div>
			</nav>
		</div>

		<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<b>Post to Community</b>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<form action="Community.php" method="POST">
							<img src="male_avatar.jpg" style="vertical-align: middle; width: 5%; height: 5%; border-radius: 50%;" alt="avatar" class="avatar">
							<label style="padding-left: 2%;"><input type="text" name="text" class="form-control" placeholder="What's on your mind"></label>
							<button type="submit" name="posty" class="btn btn-sm btn-default"><span class="fa fa-send"></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<br>
		<table class="table w3-panel w3-card" style="margin-right: 32.5%; margin-left: 32.5%; width: 32.5%;">
			<?php
			$ruby=mysqli_connect('localhost','root','','havi_helps');
			$fetch=mysqli_query($ruby,"SELECT * FROM posts");
			while ($row=mysqli_fetch_assoc($fetch)) {
				extract($row);
				echo "
				<tr>
				<td>
				<img src='male_avatar.jpg' style='float: right; vertical-align: top; width: 30px; border-radius: 50%;' alt='avatar' class='avatar'>
				</td>
				<td>
				<b style=''>User A</b><small><i style='float: right;'>6 min</i><br><i>@userA</i></small><div>$text</div></label>
				<br>
				<a href=''><span class='fa fa-chevron-up'></span></a>
				<a href=''><span style='padding-left: 20%;' class='fa fa-chevron-down'></span></a>
				<a href=''><span style='padding-left: 20%;' class='fa fa-comment'></span></a>
				<small><i><a href=''><span style='float: right;' href='delete.php?id=$id'>Delete</a></i></small>
				</td>
				</tr>
				";}?>
			</table>
			<?php 
			//include('server.php') 
			if (isset($_POST['posty'])) {
				$ruby=mysqli_connect('localhost','root','','havi_helps');
				if(!$ruby) {
					echo "Failed to connect";
				} else { extract($_POST);
					$insertme="INSERT INTO `posts` (`id`, `text`) VALUES (NULL, '$text')";
					$bibia=mysqli_query($ruby,$insertme);
					if($bibia) { 
						echo "<h1 style='text-align:center;'>Saved successfully</h1>";
					}

				}
 			 # code...
			}
			?>
		</body>
		</html> 
