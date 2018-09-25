<?php

// Connect Database
include('_includes/db.php');

// Create Rows or Data in Database
function createRows(){

    // Getting Data from Input Form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL Injection Preventation
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    // Password Encryption
    $hashFormat = "$2y$15$";
    $salt = "rfyqwtiumnzbxvobtwervq";
    $hashF_Salt = $hashFormat . $salt;
    $password = crypt($password, $hashF_Salt);

    // CREATE Query
    $query = "INSERT INTO users(username, password) VALUES('$username', '$password')";

    // Query Verification
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed!" . mysqli_error());
    } else{
    	echo "<h3 class='text-success'>Record Created</h3>";
    }
}

// Show or view all Data in Database
function showAllData(){
    // SELECT Query
    $query = "SELECT * FROM users";

    // ID In Option From Database
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }

    // Query Verification
    global $connection;
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed!" . mysqli_error());
    }
}

// Updata data in Database
function updateData(){
	// Collecting Data from INPUT
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    // UPDATE Query
    $query = "UPDATE users SET username='$username', password='$password' WHERE id=$id";

    // Query Verification
    global $connection;
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed".mysqli_error($connection));
    } else{
        echo "<span class='text-success'>Record Updated</span>";
    }
}

// Delete data in Database
function deleteRows(){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    // DELETE Query
    $query = "DELETE FROM users WHERE id=$id";

    // Query Verification
    global $connection;
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query Failed".mysqli_error($connection));
    } else{
        echo "<h3 class='text-success'>Record Deleted</h3>";
    }
}

?>
