<?php
		// CONSTANTS
		define( "TITLE", "PHP Variables & Constants" );
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo TITLE; ?></title>
</head>
<body>
	
	<?php
		// BOOLEAN: A boolean variable specifies a value of true or false
		$loggedIn = true;

		// INTEGER: An integer variable is any whole number
		$myAge = 21;

		// FLOATING POINT: Usually a fractional number, with a decimal
		$totalPrice = 146.28;

		// STRING: Simple text that must be enclosed within a double quotations " " or single quotations ' '
		$fullName = "Md Rubel Amin";

		// DISPLAY VARIABLES ON SCREEN
		echo "Hello, my name is $fullName and I am $myAge years old.";
	?>
</body>
</html>