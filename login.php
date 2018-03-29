<?php

	$con=mysqli_connect('localhost','root','','project');

	
?>






<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="..\css\bootstrap.css">
</head>
<body>
<!-- three types of form in bootstrap -->
<!--1. default i.e. vertical form -->
<?php
if (isset($_POST['username'])) {
		
		extract($_POST);
		$qr="select * from user where username='$username' AND password='$password' ";
		$result=mysqli_query($con,$qr);
		if (mysqli_num_rows($result)>0) {
				header("location: welcome.html");
		}
		
	
	else{
			echo "<div class='alert alert-warning'>please enter correct detail </div>";
		}
}
?>
	<div class="container">
		<div class="row">
		<center><h1>Login form</h1></center>
	
		<form class="col-md-offset-4 col-md-4" method="post">
			 <div class="form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control" name="username" id="username">
			</div>
		 	<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="password" id="password">
			</div>
			 <div class="form-group">
				<label>
				<input type="checkbox" name="checkbox"> Remember Me
				</label>
			</div>
			<button type="submit" class="btn btn-primary btn-">Submit</button>
			
			<button type="reset" class="btn btn-default">Reset</button>
	</form>
	</div>
</div>
</body>
</html>
