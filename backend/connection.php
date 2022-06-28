<?php
$user = 'cybernomand';
$host = "localhost";
$password = "D4yl!4D?Oef4ISYC";
$database = "psychologist_booking_system";

session_start();
if($connection = mysqli_connect($host,$user,$password,$database)){
    // echo "<h3 style='color:green'>Connected successfully</h3>";
}
else{
    echo"<h3 style='color:red'>Could not connect successfully</h3>" .mysqli_error($connection);
}   
?>