<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Profile Page</title>

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
  		<h1>Profile Page</h1>
      <p class="lead">Welcome <?php echo $_SESSION['loggedInUser']; ?></p>
      <p>Your email address is: <?php echo $_SESSION['loggedInEmail']; ?></p>
      <p><a href="logout.php" class="btn btn-danger btn-sm">Log out</a></p>

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