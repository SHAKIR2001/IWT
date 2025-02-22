<?php

	require 'config.php';

	if (isset($_POST['guest_details'])) 
	  {
	  	$f_name = $_POST['first_name'];
	  	$l_name = $_POST['last_name'];
	  	$addr = $_POST['address'];
	  	$city = $_POST['city'];
	  	$post_code = $_POST['postal_code'];
	  	$country = $_POST['country'];
	  	$email = $_POST['email'];
	  	$mobile = $_POST['mobile'];


	  	$data = "INSERT INTO guest_info (f_name, l_name, address, city, postal_code, country, email, mobile) VALUES ('$f_name', '$l_name', '$addr', '$city', '$post_code', '$country', '$email', '$mobile')";

	  	$all = mysqli_query($connection, $data);

	  	if ($all) 
	  	{
	  		header('location:../booking.php');
	  	}
	  	else
	  	{
	  		die(mysqli_error($connection));
	  	}

	  }	

	  mysqli_close($connection);
?>