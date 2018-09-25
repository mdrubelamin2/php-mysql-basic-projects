<?php

	// Set a Cookie to the browser
	$name = "SomeName";
	$value = 100;
	$expiration = time() + (60*60*24*7); // expired in 1 week
	setcookie($name, $value, $expiration);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COOKIES</title>
</head>
<body>

<?php
	// View the Cookie
	if (isset($_COOKIE['SomeName'])) {
		$someOne = $_COOKIE['SomeName'];
		echo $someOne;
	} else{
		$someONe = "";
	}
?>

</body>
</html>