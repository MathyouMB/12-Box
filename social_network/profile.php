
<?php
$name ="";
session_start();
include("includes/connection.php");
$name;
if(isset($_GET['user_name'])){
	$username = $_GET['user_name'];
	//mysql_connect("localhost","root","") or die("could not connect")
	//mysql_
	$userquery = mysqli_query($con, "select * from users where user_name='$username'");
	if (mysqli_num_rows($userquery) != 1){
		die("that username could not be found.");
	}

	while($row = mysqli_fetch_array($userquery,MYSQLI_ASSOC)){
		//echo $row['username'];
		$name = $row['user_name'];

	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $name; ?></title>
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
				<?php echo $name; ?>
				<center><img src="images/logo.png" class="img-rounded"></center>
			</div>
		</div>
	</div>
</body>
</html>


