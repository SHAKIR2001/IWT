<?php

$conn =new mysqli("localhost", "root", "", "project1" );

if (!$conn){
    die("Connection Failed!". mysqli_connect_error());
}
/*
else{
    echo"Database detected Success!";
}
*/
?>