<?php

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
        if($connection){
            echo "We are connected";
        }else{
            die("Database not connected");
        }
    }

    // Header Including
    include('_includes/header.php');
?>
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <form action="" method="post">
                <!-- Username -->
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control"></input>
                </div>
                <!-- Password -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" class="form-control"></input>
                </div>

                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

</body>
</html>