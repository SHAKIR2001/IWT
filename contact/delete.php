<?php

include "config.php";


if (isset($_GET["id"]))
{
    $id = $_GET["id"];


    $sql = "DELETE FROM contact_us WHERE id = $id";
    $conn->query($sql);
}

header("location: view.php");
exit;
?>