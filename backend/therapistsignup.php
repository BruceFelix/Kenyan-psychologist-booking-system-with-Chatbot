<?php
//creating db connection
require 'connection.php';
//sanitizing user input
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['password'] == $_POST['passconfirm']){
        $username =  mysqli_escape_string($connection,$_POST['name']);
        $email = mysqli_escape_string($connection,$_POST['mail']);
        $number =  mysqli_escape_string($connection,$_POST['number']);
        $title = mysqli_escape_string($connection,$_POST['title']);
        $organization = mysqli_escape_string($connection,$_POST['organization']);
        $aboutself = mysqli_escape_string($connection,$_POST['aboutself']);
        $profilePicture = $_FILES['profile']['name'];
        $password = mysqli_escape_string($connection,password_hash($_POST['password'],PASSWORD_BCRYPT)); //hashing a password

        //make sure file type is image
        if(preg_match("!image!", $_FILES['profile']['type'])){
            //copy image to images/ folder
            if(copy($_FILES['profile']['tmp_name'], $profilePicture)){
                if((move_uploaded_file($_FILES['profile']['tmp_name'],'../Images/Therapists/'.$profilePicture))) {
                    $insert_details = "INSERT INTO therapists(name,email,phone_number,title,organization,aboutself,profile,password) VALUES('$username','$email','$number','$title','$organization','$aboutself','$profilePicture','$password')";    
    
                    //checking if user email already exists
                    $getRecords = "SELECT * FROM therapists WHERE email ='$email'";
                    $receiveNumber = mysqli_query($connection,$getRecords);
                    if(mysqli_num_rows($receiveNumber)>0){
                        echo "<h3 style='color:red'> This user aready exists.</h3>";
                        
                        // header("location: ../../Front-end/signup/driver-signup.html");   
                    }
                    else{
                        if(mysqli_query($connection,$insert_details)){
                            // echo "<h3 style='color:green'>User added successfully</h3>";
                            header("location: ../../Frontend/Loginpage/index.html");
                        }
                        else{
                            echo "<h3 style='color:red'>User not added </h3>".mysqli_error($connection);
                        }
                    }
                }
            }
            else{
                $_SESSION['message'] = "File upload fail ";
            }
        }
        else{
            $_SESSION['message'] = "Please only upload GIF, JPG, or PNG images ";
        }

    }
    else{
        $_SESSION['message'] = "The password do not match! ";
    }
}
?>
