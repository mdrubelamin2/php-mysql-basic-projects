<?php
	// CONSTANTS
	define( "TITLE", "Functions &amp; Arguments" );
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

        function myFirstFunction(){
            $a = 0;

            do{
                echo "$a &nbsp;";
                $a++;
            }while($a <= 100);
        }

        // call the function
        myFirstFunction();

        function mySecondFunction($a){
            do{
                echo "$a &nbsp;";
                $a++;
            }while($a <= 10);
        }

        // Call the function
        // pass in an argument
        mySecondFunction(5);

        function addTogether($num1, $num2){
            $newNum = $num1 + $num2;
            echo "$num1 + $num2 = $newNum";
        }

        addTogether(10, 15);

    ?>

  	</div><!-- Container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>