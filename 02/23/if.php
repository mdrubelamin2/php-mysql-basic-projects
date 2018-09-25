<?php
	// CONSTANTS
	define( "TITLE", "If, Else &amp; Elseif Statements" );
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

      // IF expression is TRUE, do something
      // IF expression is FALSE, don't do anything

      $foo = 99;
      $bar = 79;

      // IF
      if ($foo > $bar) {
        # to show vabiable's value in the string output
        echo "$foo is greater than $bar <br>";
      }

      // ELSE
      $currentlyListeningTo = "Barenaked Ladies";
      if ($currentlyListeningTo == "The Tragically Hip") {
        # to show vabiable's value in the string output
        echo "You are listening to $currentlyListeningTo";
      } else {

        echo "Taking a wild guess here, you're listening to $currentlyListeningTo <br>";

      }

      // ELSE IF
      $favProgrammingLang = "PHP";
      if ($favProgrammingLang == "C++") {
        echo "Your favourite programming language is $favProgrammingLang";
      } elseif ($favProgrammingLang == "PHP") {
        echo "Good one! You dig $favProgrammingLang";
      } else{
        echo "Guess you don't like php or c++. Oh well....";
      }

  		?>

  	</div><!-- Container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>