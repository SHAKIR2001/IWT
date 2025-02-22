<?php

if (isset($_GET["id"]))
{
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "project1";

    //create connection
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM inqure WHERE id = $id";
    $connection->query($sql);
}

header("location:read.php");
exit;
?>