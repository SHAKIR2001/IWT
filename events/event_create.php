<?php

include "config.php";

if (isset($_POST['submitbtn1']))
{   
    
    $package = $_POST['package'];
    $date_1 = $_POST['date'];
    $title = $_POST['title'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message_1 = $_POST['message'];
    
    $sql = "INSERT INTO customer (package, date_inq, title, firstname, lastname, email, phone, message_1) VALUES ('$package', '$date_1', '$title', '$first_name', '$last_name', '$email', '$phone', '$message_1')";

    $result = mysqli_query($conn, $sql);
        
    if($result)
    {
        header('location:events.html');
    }
    else{
        die(mysqli_error($conn));
    }
}
    
mysqli_close($conn);

?>