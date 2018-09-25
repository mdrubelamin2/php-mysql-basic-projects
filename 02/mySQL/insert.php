<?php 

	include("connection.php");

  

    if (isset($_POST["add"])) {
    // build a function that validates data
    function validateFormData($formData){
      $formData = trim(stripslashes(htmlspecialchars($formData)));
      return $formData;
    }

    // check to see if inputs are empty
    // create variables with form data
    // wrap the data with our function

    $username = $email = $password = "";

    if(!$_POST["username"]){
      $nameError = "Please enter your name <br>";
    } else {
      $username = validateFormData($_POST["username"]);
    }

    if(!$_POST["email"]){
      $emailError = "Please enter your email <br>";
    } else {
      $email = validateFormData($_POST["email"]);
    }

    if(!$_POST["password"]){
      $passwordError = "Please enter your password <br>";
    } else {
      $password = validateFormData($_POST["password"]);
    }

    if ($username && $email && $password) {
      # code...
     $query = "INSERT INTO users (id, username, password, email, signup_date, biography) VALUES (NULL, '$username', '$password', '$email', CURRENT_TIMESTAMP, NULL)";

    if (mysqli_query($conn, $query)) {
      # code...
      echo "New Record in database";
    } else{
      echo "Error: ". $query. "<br>". mysqli_error($conn);
    }

    }

  }

  mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>MySQL Insert</title>

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
  		<h1>MySQL Insert</h1>

    <p class="text-danger">* Required fields</p>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <small class="text-danger">* <?php echo $nameError; ?></small>
        <input type="text" placeholder="username" name="username"><br><br>
        <small class="text-danger">* <?php echo $emailError; ?></small>
        <input type="text" placeholder="Email" name="email"><br><br>
        <small class="text-danger">* <?php echo $passwordError; ?></small>
        <input type="password" placeholder="password" name="password"><br><br>
        <input type="submit" name="add" value="add">
      </form>



  	</div><!-- Container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>