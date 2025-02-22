<?php

include "config.php";

if (isset($_POST['connect']))
{   
    
    $last_name = $_POST['Lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$country = $_POST['country'];
	$msg = $_POST['message'];
    
    $sql = "INSERT INTO contact_us (last_name, email, phone, country, message) VALUES ('$last_name', '$email', '$phone', '$country', '$msg')";

    $result = mysqli_query($conn, $sql);
        
    if($result)
    {
        // echo "User successfully created";
        header('location:contact.html');
    }
    else{
        die(mysqli_error($conn));
    }
}
    
mysqli_close($conn);

?>
