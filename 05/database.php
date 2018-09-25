<?php

	$connection = mysqli_connect('localhost', 'root', '', 'database');
	if($connection){
		echo "<h4 class='text-success'>Database Connected</h4>";

	} else{
		die ("Not Connected".mysqli_error($connection));
	}

	$query = "SELECT * FROM users";
	$result = mysqli_query($connection, $query);
	if(!$result){
		die("Query Error".mysqli_error($connection));
	} else{
		echo "<h4 class='text-success'>Data Synced Successfully</h4>";
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Database</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="col-xs-6 col-xs-offset-3">
	<?php
		while($row = mysqli_fetch_assoc($result)){
			echo "<pre>";
			print_r($row);
			echo "</pre>";
		}
	?>
	</div>
</div>

</body>
</html>