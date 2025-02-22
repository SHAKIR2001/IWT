<?php

    $conn = new mysqli('localhost', 'root', '', 'project1');

    if(!$conn){
        
        die(mysqli_error($con));
    }

?>