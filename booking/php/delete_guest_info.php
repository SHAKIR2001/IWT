<?php

	require 'config.php';

	?>

	<?php

	if (isset($_GET["id"]))
	{
	    $id = $_GET["id"];

	    $servername = "localhost";
	    $username = "root";
	    $password = "";
	    $database = "project1";

	    $connection = new mysqli($servername, $username, $password, $database);

	    $data = "DELETE FROM guest_info WHERE id = $id";
	    $connection->query($data);
	}

	header("location: display.php");
	exit;
?>
