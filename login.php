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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<link rel="stylesheet" href="logsignup.css">

</head>

<body>

	<div id="box">
		
		<form method="post">
			
			<div class="login">
				<h4>Login</h4>
			</div>
			<div class="field">
				<input id="text" type="text" placeholder="User name" name="user_name"><br><br>
			</div>
			
			<div class="field">
				<input id="text" type="password" placeholder="Password" name="password"><br><br>
			</div>
			

		<!--	<input id="button" type="submit" value="Login"><br><br>-->
			<div class="pass-link">
                        <a href="#">Forgot password?</a>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer">
                        </div>
                        <input type="submit" value="Login">
                    </div>
					<div class="signup-link">
                        Not a member? <a href="signup.php">Signup now</a>
					</div>

		</form>
	</div>
</body>
</html>