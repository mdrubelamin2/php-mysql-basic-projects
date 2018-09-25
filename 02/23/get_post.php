<?php
	// CONSTANTS
	define( "TITLE", "GET &amp; POST" );

  if (isset($_POST["form_submit"])) {
    // build a function that validates data
    function validateFormData($formData){
      $formData = trim(stripslashes(htmlspecialchars($formData)));
      return $formData;
    }

    // check to see if inputs are empty
    // create variables with form data
    // wrap the data with our function

    if(!$_POST["name"]){
      $nameError = "Please enter your name <br>";
    } else {
      $name = validateFormData($_POST["name"]);
    }

    if(!$_POST["email"]){
      $emailError = "Please enter your email <br>";
    } else {
      $email = validateFormData($_POST["email"]);
    }

  }

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
      
      <h4>Submitted via $_GET</h4>
      <form action="form_get.php" method="get">
        <input type="text" placeholder="Name" name="name">
        <input type="text" placeholder="Email" name="email">
        <input type="submit" name="form_submit">
      </form>

      <hr>

      <h4>Submitted via $_POST</h4>
      <form action="form_post.php" method="post">
        <input type="text" placeholder="Name" name="post_name">
        <input type="text" placeholder="Email" name="post_email">
        <input type="submit" name="post_submit">
      </form>

      <hr>

      <h4>Submitted to current page</h4>
      <p class="text-danger">* Required fields</p>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <small class="text-danger">* <?php echo $nameError; ?></small>
        <input type="text" placeholder="Name" name="name"><br><br>
        <small class="text-danger">* <?php echo $emailError; ?></small>
        <input type="text" placeholder="Email" name="email"><br><br>
        <input type="submit" name="form_submit">
      </form>

      <?php
          if(isset($_POST["form_submit"])){
            echo "<h4>Your Info</h4>";
            echo "$name <br> $email <br>";
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