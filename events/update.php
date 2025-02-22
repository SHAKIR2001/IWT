<?php
 
 include "config.php";

// Update
if (isset($_POST['updatebtn2'])) {
    $id = $_POST['id'];
    $package = $_POST['package'];
    $date_1 = $_POST['date'];
    $title = $_POST['title'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message_1 = $_POST['message'];

    $sql = "UPDATE customer SET package='$package', date_inq='$date_1', title='$title', firstname='$first_name', lastname='$last_name', email='$email', phone='$phone', message_1='$message_1' WHERE id='$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location:view.php');
    } else {
        die(mysqli_error($conn));
    }
}


$id = $_GET['id'];
$select_sql = "SELECT * FROM customer WHERE id='$id'";
$select_result = mysqli_query($conn, $select_sql);

if ($select_result) {
    $row = mysqli_fetch_assoc($select_result);
} else {
    die(mysqli_error($conn));
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Record</title>
</head>
<body style="height: 100vh; width: 100%; background-image: url('images/icons/bg.png'); background-size: cover;">
    <h2 style="font-size:30px; margin-bottom: 60px; text-align: center; color: white;">Update Record</h2>
    <form method="post" action="" style="width:370px; border: 1px solid black; padding:30px; margin:auto; font-size: 25px; background-color: white;">
        <!-- Hidden input for id -->
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <!--update form -->
        <label style="pos" for="package">Package:</label>
        <select name="package" value="<?php echo $row['package']; ?>" style="margin-left: 40px;">
                    <option>Standard Meeting Room</option>
					<option>Executive Boardroom</option>
					<option>Luxury Conference Suite</option>
					<option>Basic Event Hall</option>
					<option>Elegant Banquet Hall</option>
					<option>Luxury Ballroom</option>

        </select><br>

        <label for="date">date:</label>
        <input type="date" name="date" value="" style=" margin-left: 80.5px;"><br>

        <label for="title">title:</label>
        <select name="title" value="" style=" margin-left: 84px;">

                    <option>Mr</option>
					<option>Ms</option>
					<option>Mrs</option>
					<option>Dr</option>
					<option>Prof</option>
		</select><br>

        <label for="firstname">firstname:</label>
        <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" style="margin-left: 29px;"><br>

        <label for="lastname">lastname:</label>
        <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" style="margin-left: 36px;"><br>

        <label for="email">email:</label>
        <input type="text" name="email" value="<?php echo $row['email']; ?>" style="margin-left: 69px;"><br>

        <label for="phone">phone:</label>
        <input type="text" name="phone" value="<?php echo $row['phone']; ?>" style="margin-left: 63.5px;"><br>

        <label for="message">message:</label>
        <input type="text" name="message" value="<?php echo $row['message_1']; ?>" style="margin-left: 39px;"><br>

      

        <input type="submit" name="updatebtn2" value="Update" style="position: relative; margin-left: 150px; margin-top: 30px;">
    </form>
</body>
</html>
