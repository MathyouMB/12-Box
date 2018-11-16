<!DOCTYPE html>
<html>
<head>
	<title>12 Box</title>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><img src="images/logo.png"></center>
			</div>
		</div>
	</div>
	<div class="row">
		<!--<div class="col-sm-6" style="left:0.5%;">
			<img src="images/test.jpg" class="img-rounded" title="Test" width="650px" height="565px">
		</div>
		<div id="centered1" class="centered"><h3 style="color:white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>ok</strong></h3></div>
		<div id="centered2" class="centered"><h3 style="color:white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>ok</strong></h3></div>
		<div id="centered3" class="centered"><h3 style="color:white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>ok</strong></h3></div>
		-->
	</div>
	<!--
	<div class="col-sm-12" align="center">
		<form method="post" action="">

			<input type="email" placeholder="Email" name ="email" class="form-control input-md"><br>
			<button id="signup" class="btn btn-info btn-lg" name="signup">Sign up</button><br><br>
			<?php
			/*
				if(isset($_POST['signup'])){
					echo "<script>window.open('signup.php','_self;')</script>";
				}*/
				?>

			<button id="login" class="btn btn-info btn-lg" name="login">Login</button><br><br>
			<?php /*
				if(isset($_POST['login'])){
					echo "<script>window.open('signin.php','_self;')</script>";
				} */
				?>




	</div> -->

	<div class="row">
		<div class="main-content">
			<div class="header">
				<h1 style="text-align: center;"><span class="glyphicon glyphicon-search"></span><strong> Search</strong></h1><hr>
			</div>
			<div class="1-part">
				<form action="profile.php" method="GET">
						<input type="text" placeholder="Username" id="user_name" name="user_name" class="form-control input-md">
				</form>	
<hr>
				<form action="" method="post">
					<center><button id="signup" class="btn btn-info btn-lg" name="signup">Sign up</button></center><br>
					<center><button id="login" class="btn btn-info btn-lg" name="login">Login</button></center>
					<?php
					if(isset($_POST['login'])){
						echo "<script>window.open('signin.php','_self;')</script>";
					}
					?>
				</form>
			</div>
		</div>
	</div>
</body>
</html>