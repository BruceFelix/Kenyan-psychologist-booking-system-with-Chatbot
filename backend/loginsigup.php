<?php

//creating db connection
require '../connection.php';
//sanitizing user input
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['password'] == $_POST['passconfirm']){
        $username =  mysqli_escape_string($connection,$_POST['name']);
        $email = mysqli_escape_string($connection,$_POST['mail']);
        $password = mysqli_escape_string($connection,password_hash($_POST['password'],PASSWORD_BCRYPT)); //hashing a password
    }
    else{
        $_SESSION['message'] = "The password do not match! ";
    }
    else{
        echo"<h3 style='color:red'>Could not signup successfully</h3>" .mysqli_error($connection);
    }
}
?>