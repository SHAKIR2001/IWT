<?php

	require 'config.php';

	if (isset($_POST['reservation_type']))
	{
		$type = $_POST['reservation_type'];

		$data = "INSERT INTO reservation	(accommodation_type) VALUES ('$type')";

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