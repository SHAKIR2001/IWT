<?php
    require 'connection.php';

    if (isset($_POST['submit_inq'])) 
    {
        $title = $_POST['title'];
        $firstName = $_POST['Firstname'];
        $lastName = $_POST['Lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $country = $_POST['country'];
        $restaurant = $_POST['resturant'];
        $date_ = $_POST['date_in'];
        $message_ = $_POST['msg'];

        $sql = "INSERT INTO inqure (title, firstName, lastName, email, phone, country, restaurant, date_inq, message_inq) VALUES ('$title', '$firstName', '$lastName', '$email', '$phone' , '$country', '$restaurant', '$date_', '$message_')";
        
        $stmt = mysqli_query($conn, $sql);

        if($stmt)
        {
            header('location:dining.html');
        }
        else
        {
            die(mysqli_error($conn));
        }
    }

    mysqli_close($conn);
?>

