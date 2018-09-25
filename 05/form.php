<?php

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$minimum = 5;
		$maximum = 10;

		if(strlen($username) < $minimum){
			echo "Username has to be longer than five.";
		} elseif(strlen($username) > $maximum){
			echo "Username cannot be longer than ten";
		}

		$name = array("Rubel", "Edwin", "Amin", "Diaz", "Udemy", "Affable", "Design", "Development");
		if(!in_array($username, $name)){
			echo "Sorry, You are not allowed.";
		} else{
			echo "Welcome";
		}

		// echo "hello: ". $username. "<br>";
		// echo "your password is: ". $password;
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>

	<form action="form.php" method="post">
		<input type="text" name="username" placeholder="Enter your Username"><br>
		<input type="password" name="password" placeholder="Enter your password"><br>
		<input type="submit" name="submit">
	</form>

</body>
</html>