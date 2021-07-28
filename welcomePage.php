<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome</title>
	<script type="text/javascript" src="search.js"></script>
</head>
<body>
	<div style="display: grid; place-items: center center">
		<span style="text-align:center; font-size: 45px;">Welcome Page</span>

		<br>
		<form name="form" onsubmit="submit(this); return false;" method="POST">
			<label for="id">Enter ID:</label>
			<input type="text" name="id" id="searchId">
			<input type="submit" name="search" value="search">
		</form>
		<br>
		<hr style="width: 50%">

		<?php require "submitAction.php"; ?>

		<br>
		<span style="color: red; border: 3px dashed red;"><?php echo $idErr; ?></span>

		<span>Back to <a href="log-in.php">log in</a></span>
	</div>
</body>
</html>