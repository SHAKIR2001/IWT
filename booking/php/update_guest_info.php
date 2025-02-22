<?php

    include "config.php";

    $data = "SELECT * FROM guest_info";

    $all = $connection->query($data)

?>

<?php


	if (isset($_POST['update_btn'])) 
	{
	    $id = $_POST['id'];
	    $f_name = $_POST['first_name'];
	  	$l_name = $_POST['last_name'];
	  	$addr = $_POST['address'];
	  	$city = $_POST['city'];
	  	$post_code = $_POST['postal_code'];
	  	$country = $_POST['country'];
	  	$email = $_POST['email'];
	  	$mobile = $_POST['mobile'];
	    

	    $data = "UPDATE guest_info SET id='$id', f_name='$f_name', l_name='$l_name', address='$addr', city='$city', postal_code='$post_code', country='$country', email='$email', mobile='$mobile' WHERE id='$id'";

	    $all = mysqli_query($connection, $data);

	    if ($all) 
	    {
	        header('location:display.php');
	    } 
	    else 
	    {
	        die(mysqli_error($connection));
	    }
	}


	$id = $_GET['id']; 

	$selected_data = "SELECT *  FROM guest_info WHERE id='$id'";
	$all_selected = mysqli_query($connection, $selected_data);

	if ($all_selected) 
	{
	    $row = mysqli_fetch_assoc($all_selected);
	} 
	else 
	{
	    die(mysqli_error($connection));
	}

	mysqli_close($connection);
?>


<!DOCTYPE html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ROYAL OAK: ADMIN-update</title>

    <link rel="icon" type="img/png" href="images/icons/logo-removebg.png">

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handjet:wght@200;300;700&family=Inconsolata:wght@300;400;600;700;800&family=
    Poppins:wght@100;200;300;400;600;700&family=Titillium+Web:ital,wght@0,300;0,400;0,600;0,700;1,200&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/471c4e19ff.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css">
	<link rel="stylesheet" type="" href="../css/booking.css">
	<link rel="stylesheet" type="text/css" href="../css/contact_btn.css">

</head>

<body>

	<!-- header section begin -->
    <header>
        <div class="nav-position" style="position: sticky; top: 0;">
            <div>
                <img class="logoimg" src="../images/icons/logo-removebg.png" alt="logo" ></img>
            </div>

            <div class="nav" style="background: linear-gradient(to right, #00093c, #2d0b00) ; height: 76.5px;">
                <ul>
                    <div class="topnav">
                    <li><a class="active" href="../../Register/Home.html"> HOME </a></li>
                        <li><a href="../about.html"> ABOUT </a></li>
                        <li><a href="../../dining/dining.html"> DINING </a></li>
                        <li><a href="../../events/events.html"> EVENTS </a></li>
                        <li><a href="../booking.php"> BOOK NOW </a></li>
                        <li><a href="../../contact/contact.html">CONTACT</a></li>
                    </div>
                    
                    <div id="log_sign"> 
                        <li class="log">
                            <button class="login-button">
                            <a href="../../Register/login.html" style="text-decoration: none;">Login
                                </a>
                            </button>
                        </li>
                        <li class="sign">
                            <button class="signup">
                            <a href="../../Register/Register.html">
                                    Sign Up
                                </a>
                            </button>
                        </li>
                    </div> 
                </ul>
            </div>
        </div>
    </header>
    <!----Header End-->

	<br><br>
    <h2 class="step3_heading" style="margin-top: 60px;">Update Records</h2>
    <br><br>
    <form method="post" action=""  id="guest_info_form" >
        
		<br><br>
		<!--- title for name --->

		<input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
							
		<!--- first name --->
		<label for="f_name">First Name:</label>
		<input type="text" id="f_name" class="align" name="first_name" placeholder="First-Name" pattern="[A-Za-z -.]+" title="Input Your First Name Here" value="<?php echo $row['f_name']; ?>" >
		<br><br>
		<!--- last name --->
		<label for="l_name">Last Name:</label>
		<input type="text" id="l_name" class="align" name="last_name" pattern="[A-Za-z -.]+" title="Input Your Last Name Here" placeholder="Lasst-Name" value="<?php echo $row['l_name']; ?>" >
		<br><br>
		<!--- address --->
		<label for="address">Address:</label>
		<input type="text" id="address" class="align" name="address" title="Input Your Address header" pattern="[A-Za-z ,.0-9/-()]+" value="<?php echo $row['address']; ?>" >
		<br><br>
		<!--- city --->
		<label for="city">City:</label>
		<input type="text" id="city" class="align" name="city" title="Input Your City Here" pattern="[A-Za-z ,-0-9]+" value="<?php echo $row['city']; ?>" >
		<br><br>
		<!--- postal code --->
		<label for="postel_code">Postal Code:</label>
		<input type="text" id="postel_code" class="align" name="postal_code" title="Input Your Postal Code Here" pattern="[A-Za-z 0-9-/.,]+" value="<?php echo $row['postal_code']; ?>" required>
		<br><br>
		<!--- country --->
		<label for="country">Country:</label>
		<input type="text" id="country" class="align" name="country" title="Input Your Country Here" pattern="[A-Za-z]+" value="<?php echo $row['country']; ?>" >
		<br><br>
		<!--- e-mail --->
		<label for="email">Email:</label>
		<input type="email" id="email" class="align" name="email" title="Input Your Email Here" value="<?php echo $row['email']; ?>" >
		<br><br>
		<!--- mobile --->
		<label for="mobile">Mobile:</label>
		<input type="tel" id="mobile" class="align" name="mobile" title="Input Your Mobile Here" pattern="^\+?[0-9]{10}$" value="<?php echo $row['mobile']; ?>" >

       <div style="display: flex; flex-direction: row; justify-content: center; margin-top: 40px; margin-bottom: 50px;">
       		<input type="submit" name="update_btn" value="Update" id="next_button_for_guest_detail">
       	</div>

    </form>

    <!---Footer-->
    <footer style="position: inherit;">

        <div class="row" >
            <div class="col">
                <img src="../images/icons/logo.png" style="width: 70px;height: 70px; " class="logoFooter">
                <br><br>
                <p><i>"Your ideal location for <br> memorable occasions."</i></p>
            </div>
            <div class="col">
                    <h3>Office</h3>
                    <p>THE ROYAL OAK</p>
                    <br>
                    <p>21, HIKKADUWA RD</p>
                    <br>
                    <p>COLOMBO 07</p>
                    <p class="email-id">royaloak@gmail.com</p>
                    <h4>+94 112 458 974</h4>
            </div>
            <div class="col">
                    <h3>Links</h3>
                    <ul>
                    <li><a class="active" href="../../Register/Home.html"> HOME </a></li>
                        <li><a href="../about.html"> ABOUT </a></li>
                        <li><a href="../../dining/dining.html"> DINING </a></li>
                        <li><a href="../../events/events.html"> EVENTS </a></li>
                        <li><a href="../booking.php"> BOOK NOW </a></li>
                        <li><a href="../../contact/contact.html">CONTACT</a></li>
                    <li><a href="../../events/Terms&Cond.html">TERMS & CONDITIONS</a></li>
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