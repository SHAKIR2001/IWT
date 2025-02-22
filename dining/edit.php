<?php
 include 'connection.php';

// Update
if (isset($_POST['updatebtn2'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $restaurant = $_POST['restaurant'];
    $date_ = $_POST['date_inq'];
    $message_ = $_POST['message_inq'];

    $sql = "UPDATE inqure SET title='$title', firstName	='$firstName', lastName='$lastName', email='$email', phone='$phone', country='$country', restaurant='$restaurant', date_inq='$date_', message_inq='$message_' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location:read.php');
    } else {
        die(mysqli_error($conn));
    }
}

// Fetch the record to pre-fill the form
$id = $_GET['id']; // Assuming the ID is passed through the URL
$select_sql = "SELECT * FROM inqure WHERE id='$id'";
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
<body>
    <h2>Update Record</h2>
    <form method="post" action="">
        <!-- Hidden input for id -->
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <!-- Other form fields -->
        <label for="title">Title:</label>
        <select type="text" name="title" value="">
                <option value="rev">Rev.</option>
                <option value="dr">Dr.</option>
                <option value="mr">Mr.</option>
                <option value="mrs">Mrs.</option>
                <option value="miss">Miss.</option>
        </select><br><br>

        <label for="firstName">firstName:</label>
        <input type="text" name="firstName" value="<?php echo $row['firstName']; ?>"><br><br>
       
        <label for="lastName">lastName:</label>
        <input type="text" name="lastName" value="<?php echo $row['lastName']; ?>"><br><br>

        <label for="email">email:</label>
        <input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>

        <label for="phone">phone:</label>
        <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br><br>

        <label for="country">country:</label>
        <select  name="country">
            <option value="SriLanka">SriLanka</option>
            <option value="India">India</option>
            <option value="Australia">Australia</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Germany">Germany</option>
            <option value="Italy">Italy</option>
        </select><br><br>

        <label for="restaurant">restaurant:</label>
        <select  name="restaurant" value="">
            <option value="Lunch Buffet">Lunch Buffet</option>
            <option value="Dinner Buffet">Dinner Buffet</option>
            <option value="Epicuren Bistro">Epicuren Bistro</option>
            <option value="Trattoria Tavern">Trattoria Tavern</option>
            <option value="Coffee Shop">Coffee Shop</option>
            <option value="Tonic Tavern">Tonic Tavern</option>
        </select><br><br>

        <label for="date_inq">date_inq:</label>
        <input type="date" name="date_inq" value=""><br><br>

        <label for="time_inq">time_inq:</label>
        <input type="time" name="" value=""><br><br>

        <label for="message_inq">message_inq:</label>
        <input type="text" name="message_inq" value="<?php echo $row['message_inq']; ?>"><br><br>


        <!-- Add other fields similarly -->

        <input type="submit" name="updatebtn2" value="Update">
    </form>
</body>
</html>