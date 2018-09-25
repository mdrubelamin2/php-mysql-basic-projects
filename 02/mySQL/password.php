<?php 
	include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>MySQL Password Hashing</title>

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
  		<h1>MySQL Password Hashing</h1>

      <?php
         // $password = password_hash("mypassword", PASSWORD_DEFAULT);
         // echo $password;

        $hashedPassword = '$2y$10$Zvc/5zyhU0IyA.X7Etvfu.zDRwxnce0sKzg7AwV3aUCNyPjAyfDni';
        

        if (isset($_POST['login'])) {
          # code...
            if (password_verify($_POST['password'], $hashedPassword)) {
            # code...
            echo "Password is correct";
          } else{
            echo "Incorrect";
          }

        }
      ?>

      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label>* Password</label>
        <input type="password" placeholder="password" name="password"><br><br>
        <input type="submit" name="login" value="Log In" class="btn btn-primary">
      </form>


  	</div><!-- Container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>