<?php

//creating db connection
require 'connection.php';

if(isset($_POST['mail']) && isset($_POST['password'])){

    $email = mysqli_escape_string($connection,$_POST['mail']);
    $password = mysqli_escape_string($connection, $_POST['password']);
    
    //the username entered should match with the password
    $selectUser = "SELECT * FROM users WHERE email='$email'";
    $selecttherapist = "SELECT * FROM therapists WHERE email='$email'";
    $receiveduser = mysqli_query($connection,$selectUser);
    $receivedtherapist= mysqli_query($connection,$selecttherapist);
    
    //checking number of rows received
    if(!$receiveduser || !$receivedtherapist){
        echo "mysqli_error".mysqli_error($connection);
    }
    else{
        $rowuser =mysqli_num_rows($receiveduser);
        $rowtherapist =mysqli_num_rows($receivedtherapist);
        $receiveduser= mysqli_fetch_assoc($receiveduser);
        $receivedtherapist= mysqli_fetch_assoc($receivedtherapist);
        if($rowuser>0 || $rowtherapist)
        {
            
            if(password_verify($password,$receiveduser['password']) || password_verify($password,$receivedtherapist['password']))
            {   
                if($receiveduser){
                    $_SESSION['email'] = $receiveduser['mail'];
                    $_SESSION['username'] = $receiveduser['name'];
                    header("location: ../Frontend/landing.php");
                }
                else{
                    $_SESSION['email'] = $receivedtherapist['mail'];
                    $_SESSION['username'] = $receivedtherapist  ['name'];
                    header("location: ../Frontend/landing.php");
                }
    
            }
            else{
                header("location: ../Frontend/Loginpage/index.html");
            }
        }
        else
        {
            header("location: ../Frontend/Loginpage/index.html");
        }
    }
    }

?>