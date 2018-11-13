<?php
include("includes/connection.php");
	if(isset($_POST['sign_up'])){
		$uname = htmlentities(mysqli_real_escape_string($con,$_POST['u_name']));
		$uemail = htmlentities(mysqli_real_escape_string($con,$_POST['u_email']));
		$upass = htmlentities(mysqli_real_escape_string($con,$_POST['u_pass']));
		
		if(strlen($upass)<9){
			echo "<script>alert('Password should be minimum 9 characters!')</script>";
			exit();
		}

		$check_email ="select * from users where user_email='$uemail'";
		$run_email = mysqli_query($con,$check_email);
		$check = mysqli_num_rows($run_email);

		if($check == 1){
			echo "<script>alert('Email already exists, Please try using another email.')</script>";
			echo "<script>window.open('signup.php','_self;')</script>";
			exit();
		}

		$insert = "insert into users(user_name,user_email,user_pass) values('$uname','$uemail','$upass')";
		$query = mysqli_query($con,$insert);

		if($query){
			echo"<script>alert('Well Done $upass, you are good to go.')</script>";
		}else{
			echo"<script>alert('Registration failed, please try again.')</script>";
		}


	}
?>