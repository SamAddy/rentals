<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="logsignup.css">

</head>
<body>

				<div id="box">
		
		<form method="post">

			<div class="login">
				<h4>Signup</h4>
			</div>
			<div class="field">
				<input id="text" type="text" placeholder="User name" name="user_name"><br><br>
			</div>
			
			<div class="field">
				<input id="text" type="password" placeholder="Password" name="password"><br><br>
			</div>
			<div class="field">
				<input id="text" type="password" placeholder="Confirm Password"><br><br>
            </div>

			<hr>
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

			<div class="field btn">
                <div class="btn-layer">
                </div>
                <input type="submit" value="Signup">
            </div>

			<div class="login-link">
				Have an account already? <a href="login.php">Login Here</a>
			</div>
			<!--<a href="login.php">Click to Login</a><br><br>-->
		</form>
	</div>
		</div>


</body>
</html>