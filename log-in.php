<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>log-in</title>
</head>
<body style="background: #F3F3F3;">
	<?php 
		require 'DatabaseOperations.php';
        $userName = $password = $email = "";
        $userNameErr = $passwordErr = "";
        $successfulMessage = $errorMessage = "";
        $flag = false;
        $logFlag = false;

        if($_SERVER['REQUEST_METHOD'] === "POST") {
	        $userName = $_POST['username'];
	        $password = $_POST['password'];

	        if(empty($userName)) {
		        $userNameErr = "Username can not be empty!";
		        $flag = true;
	        }
	        if(empty($password)) {
		        $passwordErr = "Password can not be empty!";
		        $flag = true;
	        }
	        if(!$flag)
	        {
	        	$userName = test_input($userName);
	        	$password = htmlspecialchars($password);

	        	$res = login($userName, $password);
	        	if($res)
	        	{
	        		header("Location: welcomePage.php");
	        	}
	        	else
	        	{
	        		$logFlag = true;
	        		$errorMessage = "log-in failed";
	        	} 		    
	        }
	    }

        function test_input($data) {
	        $data = trim($data);
	        $data = stripslashes($data);
	        $data = htmlspecialchars($data);
	        return $data;
        }
	    
    ?>

	<div style="position: absolute; top: 40%; left: 50%; transform: translate(-49%, -49%);">

		<h2 style="text-align:center; font-size: 30px;font-family:optima;">Please log-in!</h2> 

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" autocomplete = 'off' name = "loginForm" onsubmit = "return isValid()">
			<fieldset style = "background: lightslategray;">

				
				<label for="username" style="float: left;">Username <span style="color: red;">*</span>: </label>
				
				<input type="text" name="username" style = "float: right;" value="<?php echo $userName; ?>">
				<span style="color: red; float: right;" id="username"><?php echo $userNameErr; ?></span>
				
				

				<br><br>

				
				<label for="password" style="float: left;">Pasword <span style="color: red;">*</span>: </label>
				 
				<input type="password" name="password" style = "float: right;">
				
				<span style="color: red;float: right;" id="password"><?php echo $passwordErr; ?></span>

			</fieldset>
			<input type="submit" name="submit" value="log in" style="background: ghostwhite; font-family: Times roman;  float: right;">
		</form>
		<span style="color: red; text-align: center;"><?php echo $errorMessage; ?></span>

		<br><br>

		<span style="float: right;">Don't have an account?<a href="createAccount.php">Sign up</a></span>

	</div>

	<script>
		function isValid(){
			var flag = true;
			var usernameErr = document.getElementById("username");
			var username = document.forms["loginForm"]["username"].value;
			usernameErr.innerHTML = "";

			var passwordErr = document.getElementById("password");
			var password = document.forms["loginForm"]["password"].value;
			passwordErr.innerHTML = "";

			if(username === "")
			{
				usernameErr.innerHTML = "Username can not be empty!";
				flag = false;
			}
			if(password === "")
			{
				passwordErr.innerHTML = "Password can not be empty!";
				flag = false;
			}

			return flag;
		}
	</script>

</body>
</html>