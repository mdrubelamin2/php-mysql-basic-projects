<?php
		// CONSTANTS
		define( "TITLE", "PHP Arrays" );
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title><?php echo TITLE; ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <!-- Custom styles for this template -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	
	<div class="container">
		<h1><?php echo TITLE; ?></h1>

		<?php 

			// SIMPLE ARRAY
			$user = array(
				"johndoe", 	// 0
				"John Doe", // 1
				32, 		// 2
				"male", 	// 3
				"Mexico" 	// 4
			);

			// ECHO THE VALUES OF THE SIMPLE ARRAY
			echo $user[0]. "<br>";
			echo $user[1]. "<br>";
			echo $user[2]. "<br>";
			echo $user[3]. "<br>";
			echo $user[4]. "<br>";

			// ASSOCIATIVE ARRAYS
			$people = array(
				"username"	=>	"johndoe",
				"fullname"	=>	"John Doe",
				"age"		=>	32,
				"gender"	=> "male",
				"country"	=> "Mexico"
			);

			// ECHO THE VALUES OF THE ASSOCIATIVE ARRAY
			echo $people["username"]."<br>";
			echo $people["fullname"]."<br>";
			echo $people["age"]."<br>";
			echo $people["gender"]."<br>";
			echo $people["country"]."<br>";

			// MULTI-DIMENTIONAL ARRAY
			$employees	= array(
				array( // Index no 0
					"username"	=>	"johndoe",
					"fullname"	=>	"John Doe",
					"age"		=>	32,
					"gender"	=> "male",
					"country"	=> "Mexico"
				),
				array( // Index no 1
					"username"	=>	"janedoe",
					"fullname"	=>	"Jane Doe",
					"age"		=>	27,
					"gender"	=> "female",
					"country"	=> "Canada"
				)
			);

			// ECHO THE VALUES OF MULTI-DIMENSIONAL ARRAY
			echo "<br><hr>";
			echo $employees[0]["fullname"]."<br>";
			echo $employees[1]["fullname"];
			
		?>

	</div><!-- container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>