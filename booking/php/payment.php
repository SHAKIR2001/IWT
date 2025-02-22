<?php
    require 'config.php';

    if (isset($_POST['payment'])) {
        $holder_name = $_POST['holder_name'];
        $card_number = $_POST['card_number'];
        $card_expiry = $_POST['expire_date'];
        $cvv = $_POST['cvv'];

        $data = "INSERT INTO payment_details (holder_name, card_number, card_expiry, cvv) VALUES ('$holder_name', '$card_number', '$card_expiry', '$cvv')";

        $inserted = mysqli_query($connection, $data);

        if ($inserted) {
            header('location:../booking.php');
        } else {
            die(mysqli_error($connection));
        }
    }

    mysqli_close($connection);
?>
