
<?php
$name ="";
session_start();
include("connection.php");
$name;
if(isset($_GET['username'])){
	$username = $_GET['username'];
	//mysql_connect("localhost","root","") or die("could not connect")
	//mysql_
	$userquery = mysqli_query($con, "select * from users where username='$username'");
	if (mysqli_num_rows($userquery) != 1){
		die("that username could not be found.");
	}

	while($row = mysqli_fetch_array($userquery,MYSQLI_ASSOC)){
		//echo $row['username'];
		$name = $row['username'];

	}
}
?>


<html>
<head>
	<title><?php echo $name; ?></title>
</head>
	
<body>
	<?php echo $name; ?>
</body>
</html>


