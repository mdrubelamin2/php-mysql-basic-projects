<?php
	// CONSTANTS
	define( "TITLE", "Loops" );
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

    // WHILE LOOP
    $startingNum = 50;
    while($startingNum <= 100){
        echo "$startingNum &nbsp;";

        // Increment by 1
        $startingNum++;
    }

    // FOR LOOP
    for ($i= 30; $i <= 40 ; $i++) { 
        echo "Number $i <br>";
    }

    // FOREACH LOOP
    $friends = array("Jim", "Sandra", "Kyle", "Cassandra");
    foreach ($friends as $friend) {
        // output each individual value in the arary
        echo "$friend is my friend! <br>";
    }

    // DO WHILE LOOP
    $foo = 10;
    
    do{
        echo "Numero $foo <br>";
        // Increment by 1
        $foo++;
    } while($foo <= 50);

    ?>

  	</div><!-- Container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>