<?php
session_start();

include "config.php";
    $id=$_SESSION['id'];


$sql= "SELECT * from reg_user where id = $id";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
            $id = $row['id']; 
            $firstname= $row['firstname'];
            $lastname= $row['lastname'];
            $homeadd= $row['haddress'];
            $phone= $row['phone'];
            $email= $row['email'];
            $password= $row['password'];

if (isset($_POST['update']))
{
    $firstname     = $_POST['FName'];
    $lastname     = $_POST['LName'];
    $homeadd   = $_POST['HAddress'];
    $phone    = $_POST['Phone'];
    $email   = $_POST['email'];
    $password    = $_POST['pwd'];
    
    $sql1 = "UPDATE reg_user set id=$id, firstname ='$firstname', lastname='$lastname', haddress= '$homeadd', phone ='$phone', email ='$email', password='$password' where id=$id";

    $result1 = mysqli_query($conn, $sql1);
        
    if($result1)
    {
        echo "User updated ";
        header('location:login.html');
    }
    else{
        die(mysqli_error($conn));
    }
}
    
mysqli_close($conn);

?>
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
    <title>ROYAL OAK: UPDATE</title>
    <link rel="icon" type="img/png" href="images/logo-removebg.png">
    
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="RegisterCSS.css">
    <script src="Java/formValidation.js"></script>

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
                  <li><a href="../booking/about.html"> ABOUT </a></li>
                  <li><a href="../dining/dining.html"> DINING </a></li>
                  <li><a href="../events/events.html"> EVENTS </a></li>
                  <li><a href="../booking/booking.php"> BOOK NOW </a></li>
                  <li><a href="../contact/contact.html">CONTACT</a></li>
                </div>
                
              <li >
                  <button class="login-button"><a href="login.html" style="text-decoration: none;">Login</a></button>
              </li>
			  <li >
                  <button class="signup"><a href="Register.html">Sign Up</a></button>
              </li>
            </ul>
        </div>
    </div>
</header>
    <!----Header End-->

    <!--Content-->
    <section>
        <div class="container">
			<div class="form-box">
				<h1 id="title">Update Details</h1>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()">  
					<div class="input-group">
						<div class="input-field" >
						<i class="fa-solid fa-user"></i>
						<input type="text" placeholder="First Name" required id="FName" name="FName">
						</div>
						<div class="input-field" >
						<i class="fa-solid fa-user"></i>
						<input type="text" placeholder="Last Name" required id="LName" name="LName">
						</div>

						

						<div class="input-field" >
						<i class="fa-solid fa-address-book"></i>
						<input type="text" placeholder="Address" required id="HAddress" name="HAddress">
						</div>

						<div class="input-field" >
						<i class="fa-solid fa-phone"></i>
						<input type="text"   id="Phone" name="Phone" placeholder="Phone" required>
						</div>
						
						<div class="input-field" >
						<i class="fa-solid fa-envelope"></i>
						<input type="email" placeholder="Email" required id="email" name="email">
						</div>

						<div class="input-field" >
						<i class="fa-solid fa-lock"></i>
						<input type="password" placeholder="Password" required id="pwd" name="pwd">
						</div>
						<div class="input-field" >
						<i class="fa-solid fa-lock"></i>
						<input type="password" placeholder="Re-Enter Password" required id="Rpwd" name="Rpwd">
						</div>
						
					</div>
					<div class="btn-field">
						<button type="submit" id="signupBtn" name="update">Update</button>
			
					</div>
				</form>
			</div>
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