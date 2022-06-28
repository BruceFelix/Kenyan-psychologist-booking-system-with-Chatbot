<?php

//creating db connection
require 'connection.php';

if(isset($_POST['mail']) && isset($_POST['password'])){

    $email = mysqli_escape_string($connection,$_POST['mail']);
    $password = mysqli_escape_string($connection, $_POST['password']);
    
    //the username entered should match with the password
    $selectUser = "SELECT * FROM users WHERE email='$email'";
    $received = mysqli_query($connection,$selectUser);
    
    //checking number of rows received
    if(!$received){
        echo "mysqli_error".mysqli_error($connection);
    }
    else{
        $row =mysqli_num_rows($received);
        $received = mysqli_fetch_assoc($received);
        if($row>0)
        {
            
            if(password_verify($password,$received['password']))
            {   
                $_SESSION['email'] = $received['mail'];
                $_SESSION['username'] = $received['name'];
                header("location: ../Frontend/therapist.html");
    
            }
            else{
                header("location: ../Frontend/index.html");
            }
        }
        else
        {
            header("location: ../Frontend/index.html");
        }
    }
    }

?>