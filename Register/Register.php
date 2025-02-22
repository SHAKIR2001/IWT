<?php

include "config.php";

if (isset($_POST['signupBtn'])) 
{   
    
    $firstname     = $_POST['FName'];
    $lastname     = $_POST['LName'];
    $homeadd   = $_POST['HAddress'];
    $phone    = $_POST['Phone'];
    $email   = $_POST['email'];
    $password    = $_POST['pwd'];
    
    $sql = "INSERT INTO reg_user (firstname, lastname, haddress, phone, email, password) VALUES ('$firstname', '$lastname', '$homeadd', '$phone', '$email', '$password')";

    $result = mysqli_query($conn, $sql);
        
    if($result)
    {
        // echo "User successfully created";
        header('location:login.html');
    }
    else{
        //The purpose of this line is to terminate the script and display an error message if *** a MySQL database operation fails *****.
        die(mysqli_error($conn));
    }
}
    
mysqli_close($conn);

?>
