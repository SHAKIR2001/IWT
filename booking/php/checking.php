<?php

require 'config.php';

if (isset($_POST['checking_submit']))
{   
    
    $c_in = $_POST['check_in'];
	$c_out = $_POST['check_out'];
	$Adl = $_POST['adults'];
	$Chld = $_POST['childrens'];
    
    $data = "INSERT INTO availability (check_in, check_out, adults, childrens) VALUES ('$c_in', '$c_out', '$Adl', '$Chld')";

    $all = mysqli_query($connection, $data);
        
    if($all)
    {
        header('location:../booking.php');
    }
    else{
        die(mysqli_error($connection));
    }
}
    
mysqli_close($connection);

?>

