<!DOCTYPE html>
<html lang="en-US">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@200;300;700&family=Inconsolata:wght@300;400;600;700;800&family=
    Poppins:wght@100;200;300;400;600;700&family=Titillium+Web:ital,wght@0,300;0,400;0,600;0,700;1,200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/471c4e19ff.js" crossorigin="anonymous"></script>
    <title>ROYAL OAK: DASHBOARD</title>
    <link rel="icon" type="img/png" href="images/logo-removebg.png">

    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="dashboard.css">

    </head>
	<body>
        <!---Header-->
        <header>
        <div class="nav-position" style="position: sticky; top: 0;">
        <div>
            <img class="logoimg" src="images/logo.png" alt="logo" ></img>
        </div>
          <div class="nav" style="background: linear-gradient(to right, #00093c, #2d0b00) ;">
            <ul>
            <li class="logo"><a href="Home.html"> The Royal Oak Colombo </a></li>
              <div class="topnav">
                <li><a class="active" href="Home.html"> HOME </a></li>
                <li><a href=""> ABOUT </a></li>
                <li><a href=""> ACCOMODATION </a></li>
                <li><a href=""> EVENTS </a></li>
                <li><a href=""> BOOK NOW </a></li>
				<li><a href="">CONTACT</a></li>
                </div>
                
              <li >
                  <button class="login-button"><a href="dashboard.php" style="text-decoration: none;">Profile</a></button>
              </li>
			  <li >
                  <button class="login-button"><a href="logout.php" style="text-decoration:none;">Log Out</a> </button>
              </li>
            </ul>
        </div>
    </div>
</header>
    <!----Header End-->

    <!--Content-->
    <?php
session_start();

include "config.php";

if (isset($_SESSION['mail'])) {
    $email = $_SESSION['mail'];

    $sql = "SELECT * FROM reg_user WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    //This condition checks if the SQL query was successful ($result is not null) and if there's at least one row in the result (mysqli_num_rows($result) > 0)
    //. This ensures that a user with the provided email exists in the database.
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        
        //These lines extract data from the $row 
        $id = $row['id'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $homeadd = $row['haddress'];
        $phone = $row['phone'];
        $email = $row['email'];
        $password = $row['password'];
    }
}

mysqli_close($conn);
?>
<?php echo "Not showing result" ?> 
<section class="dataTable">
<div class="containernew">
    <div class="details">
        User ID: <?php echo $_SESSION['id']; ?>
    </div>
    <div class="details">
        First Name: <?php echo $_SESSION['firstname']; ?>
    </div>
    <div class="details">
        Last Name: <?php echo $_SESSION['lastname']; ?>
    </div>
    <div class="details">
        Mobile Number: <?php echo $_SESSION['number']; ?>
    </div>
    <div class="details">
        Home Address: <?php echo $_SESSION['hadd']; ?>
    </div>
    <div class="details">
        Email: <?php echo $_SESSION['mail']; ?>
    </div>
    <div class="details">
        Password: <?php echo $_SESSION['password']; ?>
    </div>
</div>

<div class="buttons" >
<button class="signup"><a href="update.php">Update</a></button>
<button class="signup" style="background-color: red;"><a href="delete.php?deleteid=<?php echo $id; ?>">Delete</a></button>
</div>
</section>


 <!---Footer-->
 <footer>
        <div class="row" >
            <div class="col">
                <img src="images/logo.png" style="width: 70px;height: 50px;" class="logoFooter">
                <p>The hotel is centrally located on Galle Face Centre Road, close to Colombos business and shopping spot.</p>
            </div>
                <div class="col">
                    <h3>Office</h3>
                    <p>THE ROYAL OAK</p>
                    <p>21, HIKKADUWA RD</p>
                    <p>COLOMBO 07</p>
                    <p class="email-id">royaloak@gmail.com</p>
                    <h4>+94 - 112458974</h4>
                </div>
                <div class="col">
                    <h3>Links</h3>
                    <ul>
                        <li><a class="active" href="Home.html"> HOME </a></li>
                        <li><a href="../booking/about.html"> ABOUT </a></li>
                        <li><a href="../dining/dining.html"> DINING </a></li>
                        <li><a href="../events/events.html"> EVENTS </a></li>
                        <li><a href="../booking/booking.php"> BOOK NOW </a></li>
                        <li><a href="../contact/contact.html">CONTACT</a></li>
                        <li><a href="../events/Terms&Cond.html">TERMS & CONDITIONS</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Follow us on Social Media</h3>
                    <div class="social-icons">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-square-x-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-whatsapp"></i>
                    </div>
                </div>
        </div>
    </footer>
    <!---Footer End-->
        
       
    </body>
</html>