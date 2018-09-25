<?php

  if (isset($_POST['login'])) {
    # code...
    // build a function to validate data
    function validateFormData($formData){
      $formData = trim(stripslashes(htmlspecialchars($formData)));
      return $formData;
    }

    // Create variables
    // wrap the data with our function
    $formUser = validateFormData($_POST['username']);
    $formPass = validateFormData($_POST['password']);

    // connect to database
    include('connection.php');

    // create SQL query
    $query = "SELECT username, email, password FROM users where username = '$formUser'";

    // store the result
    $result = mysqli_query($conn, $query);

    // verify if result is returned
    if (mysqli_num_rows($result) > 0) {
      # code...
      // store basic user data in variable
      while ($row = mysqli_fetch_assoc($result)) {
        # code...
        $user       = $row['username'];
        $email      = $row['email'];
        $hashedPass = $row['password'];
      }

    // verify hashed password with the typed password
      if (password_verify($formPass, $hashedPass)) {
        # code...
        // correct login details!
        // start the session
        session_start();

        // store data in SESSION variables
        $_SESSION['loggedInUser'] = $user;
        $_SESSION['loggedInEmail'] = $email;

        header("Location: profile.php");
      } else{ // hashed password didn't verify
        // error message
      $loginError = "<div class='alert alert-danger'>Wrong username / password combination. Try Again.</div>";
      }
    } else{
      $loginError = "<div class='alert alert-danger'>NO such user in database. Please try again.<a class='close' data-dismiss='alert'>&times;</a></div>";
    }

    // close the mysql connection
    mysqli_close($conn);
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Login</title>

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
  		<h1>Login</h1>
      <p class="lead">Use this form to log in to your account</p>

      <?php echo $loginError; ?>
      <!-- Login Form -->
      <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <div class="form-group">
          <label for="login-username" class="sr-only">Username</label>
          <input type="text" class="form-control" id="login-username" placeholder="Username" name="username">

          <label for="login-password" class="sr-only">Password</label>
          <input type="password" class="form-control" id="login-password" placeholder="Password" name="password">
        </div>

        <button type="submit" class="btn btn-primary" name="login">Login!</button>
        
      </form>

  	</div><!-- Container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>