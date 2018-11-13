<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="signupStyle.css">
</head>
<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><img src="images/logo.png" class="img-rounded"></center>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="main-content">
			<div class="header">
				<h3 style="text-align: center;"><strong>Sign Up</strong></h3><hr>
			</div>
			<div class="1-part">
				<form action="" method="post">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<input type="text" class="form-control" placeholder="Username" name ="u_name" required="required">
					</div>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<input type="email" class="form-control" placeholder="Email" name ="u_email" required="required">
					</div>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<input type="password" class="form-control" placeholder="Password" name ="u_pass" required="required">
					</div><br>
					<a style="text-decoration:  none;float: right;color: #187FAB;" data-toggle="tooltip" title="Signin" href="signin.php">Already have an account?</a><br><br>
					<center><button id="signup" class="btn btn-info btn-lg" name="sign_up">Signup</button></center>
					<?php include("insert_user.php"); ?>
				</form>
			</div>
		</div>
	</div>
</body>
</html>