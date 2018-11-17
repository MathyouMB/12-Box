<?php

if (isset($_POST['submited'])){
	include('connect-mysql.php');

	$url = $_POST['url'];
	$title = $_POST['title'];
	$text = $_POST['text'];
	$sqlinsert = "INSERT INTO data (location, title, text) VALUES ('$url', '$title', '$text')";

	if(!mysqli_query($db, $sqlinsert)){
		die('error inserting new record');

	}else{

		echo"New photo added!";
	}
}

?>

<html>
<head>
<title>Add a new image to db</title>
</head>
<body>
	<h1>Insert Data into DB</h1>
	<form method ="post" action ="insert-data.php">
	<input type="hidden" name="submited" value="true"/>
	<fieldset>
		<legend>New Post</legend>
		<label>Url: <input type="text" name ="url"/></label>
		<label>Title: <input type="text" name ="title"/></label>
		<label>Text: <input type="text" name ="text"/></label>
	</fieldset>
	<br>
	<input type="submit" value="Add photo"/>
</form>
</body>
</html>
