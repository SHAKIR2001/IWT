<html>

<?php
session_start();

include "config.php";

if (isset($_POST['signinBtn'])) {
    $email = $_POST['email'];
    $password = $_POST['pwd'];

    $sql = "SELECT * FROM reg_user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    //The purpose of this line is to fetch a single row of data from the result set, corresponding to the email and password provided by the user during login.
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        // User login is successful

        //The purpose of this line is to store the value of the 'id' column from the database into a session variable.
        $_SESSION['id'] = $row['id'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['hadd'] = $row['haddress'];
        $_SESSION['number'] = $row['phone'];
        
        $_SESSION['mail'] = $row['email'];
        $_SESSION['password'] = $row['password'];
        //$_SESSION['user_id'] = $row['firstname'] . $row['lastname'];
        //echo $_SESSION['user_id'];
        header("Location:dashboard.php");
        exit;
    } else {
        // User login failed
         
            ?>
            <script>
                alert('Invalid User');
            </script>

            <?php
            
        header('location:login.html');
        exit();
    }
}

mysqli_close($conn);
?>

</html>
