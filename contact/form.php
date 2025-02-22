<?php

    include "config.php";

    $sql = "SELECT * FROM contact_us";

    $result = $conn->query($sql)

?>


<?php

// Update
if (isset($_POST['update2'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $message = $_POST['message'];
    

    $sql = "UPDATE contact_us SET id='$id', last_name='$name', email='$email', phone='$phone', country='$country', message='$message' WHERE id='$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location:view.php');
    } else {
        die(mysqli_error($conn));
    }
}

// Fetch the record to pre-fill the form
$id = $_GET['id']; // Assuming the ID is passed through the URL
$select_sql = "SELECT *  FROM contact_us WHERE id='$id'";
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
    <title>Update Records</title>
</head>
<body>
    <h2>Update Records</h2>
    <form method="post" action="">
        
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >

        
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $row['last_name']; ?>"><br><br>
        
        <label for="email">email:</label>
        <input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br><br>

        <label for="country">Country:</label>
<select style="width:150px;" name="country">
            <option value="SriLanka">SriLanka</option>
            <option value="India">India</option>
            <option value="Australia">Australia</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Germany">Germany</option>
</select>
        <br><br>

        <label for="message">Message:</label>
        <input type="text" name="message" value="<?php echo $row['message']; ?>"><br><br>

        

       <br> <input type="submit" name="update2" value="Update">
    </form>
</body>
</html>