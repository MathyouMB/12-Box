
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
				<center><img src="images/logo.png"></center>
			</div>
		</div>
	</div>



	<div class="outer-container home-page">
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-12 col-md-6 col-lg-3 no-padding">
	                <div class="portfolio-content">
	                    <figure>
	                         <img src="https://i.imgur.com/vKIDDJo.png.jpg" alt="">
	                    </figure>

	                    <div class="entry-content flex flex-column align-items-center justify-content-center">
	                       yees
	                        </h3>

	                        <ul class="flex flex-wrap justify-content-center">
	                            <li>
	                              yee
	                            </li>
	                        </ul>
	                    </div><!-- .entry-content -->
	                </div><!-- .portfolio-content -->
	            </div><!-- .col -->

	            <div class="col-12 col-md-6 col-lg-3 no-padding">
	                <div class="portfolio-content">
	                     <figure>
	                         <img src="https://i.imgur.com/vKIDDJo.png.jpg" alt="">
	                    </figure>

	                    <div class="entry-content flex flex-column align-items-center justify-content-center">
	                       yees
	                        </h3>

	                        <ul class="flex flex-wrap justify-content-center">
	                            <li>
	                              yee
	                            </li>
	                        </ul>
	                    </div><!-- .entry-content -->
	                </div><!-- .portfolio-content -->
	            </div><!-- .col -->

	            <div class="col-12 col-md-6 col-lg-3 no-padding">
	                <div class="portfolio-content">
	                     <figure>
	                         <img src="https://i.imgur.com/vKIDDJo.png.jpg" alt="">
	                    </figure>

	                    <div class="entry-content flex flex-column align-items-center justify-content-center">
	                       yees
	                        </h3>

	                        <ul class="flex flex-wrap justify-content-center">
	                            <li>
	                              yee
	                            </li>
	                        </ul>
	                    </div><!-- .entry-content -->
	                </div><!-- .portfolio-content -->
	            </div><!-- .col -->

	            <div class="col-12 col-md-6 col-lg-3 no-padding">
	                <div class="portfolio-content">
	                     <figure>
	                         <img src="https://i.imgur.com/vKIDDJo.png.jpg" alt="">
	                    </figure>

	                    <div class="entry-content flex flex-column align-items-center justify-content-center">
	                       yees
	                        </h3>

	                        <ul class="flex flex-wrap justify-content-center">
	                            <li>
	                              yee
	                            </li>
	                        </ul>
	                    </div><!-- .entry-content -->
	                </div><!-- .portfolio-content -->
	            </div><!-- .col -->

	            <div class="col-12 col-md-6 col-lg-3 no-padding">
	                <div class="portfolio-content">
	                     <figure>
	                         <img src="https://i.imgur.com/vKIDDJo.png.jpg" alt="">
	                    </figure>

	                    <div class="entry-content flex flex-column align-items-center justify-content-center">
	                       yees
	                        </h3>

	                        <ul class="flex flex-wrap justify-content-center">
	                            <li>
	                              yee
	                            </li>
	                        </ul>
	                    </div><!-- .entry-content -->
	                </div><!-- .portfolio-content -->
	            </div><!-- .col -->

	            <div class="col-12 col-md-6 col-lg-3 no-padding">
	                <div class="portfolio-content">
	                     <figure>
	                         <img src="https://i.imgur.com/vKIDDJo.png.jpg" alt="">
	                    </figure>

	                    <div class="entry-content flex flex-column align-items-center justify-content-center">
	                       yees
	                        </h3>

	                        <ul class="flex flex-wrap justify-content-center">
	                            <li>
	                              yee
	                            </li>
	                        </ul>
	                    </div><!-- .entry-content -->
	                </div><!-- .portfolio-content -->
	            </div><!-- .col -->

	            <div class="col-12 col-md-6 col-lg-3 no-padding">
	                <div class="portfolio-content">
	                     <figure>
	                         <img src="https://i.imgur.com/vKIDDJo.png.jpg" alt="">
	                    </figure>

	                    <div class="entry-content flex flex-column align-items-center justify-content-center">
	                       yees
	                        </h3>

	                        <ul class="flex flex-wrap justify-content-center">
	                            <li>
	                              yee
	                            </li>
	                        </ul>
	                    </div><!-- .entry-content -->
	                </div><!-- .portfolio-content -->
	            </div><!-- .col -->

	            <div class="col-12 col-md-6 col-lg-3 no-padding">
	                <div class="portfolio-content">
	                     <figure>
	                         <img src="https://i.imgur.com/vKIDDJo.png.jpg" alt="">
	                    </figure>

	                    <div class="entry-content flex flex-column align-items-center justify-content-center">
	                       yees
	                        </h3>

	                        <ul class="flex flex-wrap justify-content-center">
	                            <li>
	                              yee
	                            </li>
	                        </ul>
	                    </div><!-- .entry-content -->
	                </div><!-- .portfolio-content -->
	            </div><!-- .col -->

	            <div class="col-12 col-md-6 col-lg-3 no-padding">
	                <div class="portfolio-content">
	                     <figure>
	                         <img src="https://i.imgur.com/vKIDDJo.png.jpg" alt="">
	                    </figure>

	                    <div class="entry-content flex flex-column align-items-center justify-content-center">
	                       yees
	                        </h3>

	                        <ul class="flex flex-wrap justify-content-center">
	                            <li>
	                              yee
	                            </li>
	                        </ul>
	                    </div><!-- .entry-content -->
	                </div><!-- .portfolio-content -->
	            </div><!-- .col -->

	            <div class="col-12 col-md-6 col-lg-3 no-padding">
	                <div class="portfolio-content">
	                     <figure>
	                         <img src="https://i.imgur.com/vKIDDJo.png.jpg" alt="">
	                    </figure>

	                    <div class="entry-content flex flex-column align-items-center justify-content-center">
	                       yees
	                        </h3>

	                        <ul class="flex flex-wrap justify-content-center">
	                            <li>
	                              yee
	                            </li>
	                        </ul>
	                    </div><!-- .entry-content -->
	                </div><!-- .portfolio-content -->
	            </div><!-- .col -->

	            <div class="col-12 col-md-6 col-lg-3 no-padding">
	                <div class="portfolio-content">
	                     <figure>
	                         <img src="https://i.imgur.com/vKIDDJo.png.jpg" alt="">
	                    </figure>

	                    <div class="entry-content flex flex-column align-items-center justify-content-center">
	                       yees
	                        </h3>

	                        <ul class="flex flex-wrap justify-content-center">
	                            <li>
	                              yee
	                            </li>
	                        </ul>
	                    </div><!-- .entry-content -->
	                </div><!-- .portfolio-content -->
	            </div><!-- .col -->

	            <div class="col-12 col-md-6 col-lg-3 no-padding">
	                <div class="portfolio-content">
	                     <figure>
	                         <img src="https://i.imgur.com/vKIDDJo.png.jpg" alt="">
	                    </figure>

	                    <div class="entry-content flex flex-column align-items-center justify-content-center">
	                       yees
	                        </h3>

	                        <ul class="flex flex-wrap justify-content-center">
	                            <li>
	                              yee
	                            </li>
	                        </ul>
	                    </div><!-- .entry-content -->
	                </div><!-- .portfolio-content -->
	            </div><!-- .col -->
	        </div><!-- .row -->
	    </div><!-- .container-fluid -->
	</div><!-- .outer-container -->
</body>

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/custom.js'></script>
</html>


