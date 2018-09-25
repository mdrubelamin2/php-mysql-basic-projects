<?php
    include('_includes/functions.php');
    if(isset($_POST['submit'])){
        createRows();
    }

    // Header Including
    include('_includes/header.php');

?>
<div class="container">
    <div class="row">
        <h1 class="text-center">CREATE</h1>
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

                <input type="submit" name="submit" value="CREATE" class="btn btn-primary">
            </form>
        </div>
    </div>
<!-- Footer Including -->
<?php include("_includes/footer.php"); ?>
