<?php

//creating db connection
require 'connection.php';
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
    $insert_details = "INSERT INTO users(name,email,password) VALUES('$username','$email','$password')";


    //checking if user email already exists
    $getRecords = "SELECT * FROM users WHERE email ='$email'";
    $receiveNumber = mysqli_query($connection,$getRecords);
    if(mysqli_num_rows($receiveNumber)>0){
        echo "<h3 style='color:red'> This user aready exists.</h3>";
        
        // header("location: ../../Front-end/signup/driver-signup.html");   
    }
    else{
        if(mysqli_query($connection,$insert_details)){
            // echo "<h3 style='color:green'>User added successfully</h3>";
            header("location:../Frontend/Loginpage/index.html");
        }
        else{
            echo "<h3 style='color:red'>User not added </h3>".mysqli_error($connection);
        }
    }
}    
else{
        echo"<h3 style='color:red'>Could not signup successfully</h3>" .mysqli_error($connection);
    }

?>