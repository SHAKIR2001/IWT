<?php

	require 'config.php';

	if ($connection == false) {
	    die("Connection Failed!" . mysqli_connect_error());
	}


    $query = "SELECT * FROM guest_info";
    $result = $connection->query($query);

?>


<!DOCTYPE html>
<html>


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ROYAL OAK: ADMIN</title>

    <link rel="icon" type="img/png" href="../images/icons/logo-removebg.png">

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

<body style="height: 100vh;">


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

    <div style="position: relative; top: 150px; margin: auto; width:auto;">
        
        <table class="table" style="border:1px solid black;  border-collapse: collapse; margin: auto; margin-bottom: 100px; background-color: white; position: relative; width: 70%;">
        <thead>
            <tr>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">ID</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">Fisrt Name</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">Last Name</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">Address</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">City</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">Postal Code</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">Country</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">E-mail</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">Mobile</th>
                <th style="border:1px solid black;  border-collapse: collapse; padding:10px;">Action</th>

                
            </tr>
        </thread>
        </tbody>
            <?php
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){

            ?>
                        <tr>
                            <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['id']; ?> </td>
                            <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['f_name']; ?> </td>
                            <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['l_name']; ?> </td>
                            <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['address']; ?> </td>
                            <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['city']; ?> </td>
                            <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['postal_code']; ?> </td>
                            <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['country']; ?> </td>
                            <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['email']; ?> </td>
                            <td style="border:1px solid black;  border-collapse: collapse; padding:10px;"><?php echo $row['mobile']; ?> </td>

                            <td style="border:1px solid black;  border-collapse: collapse; padding:10px;">
                                <div style="margin: auto;">
                                    <button style="background-color: #5aaafa; width: 100px; height: 35px; border-radius: 6px;margin: 3px;">
                                    <a class="update" style="color: white; text-decoration: none;"  href="update_guest_info.php?id=<?php echo $row['id']; ?>">
                                         Edit
                                    </a>
                                </button>
                                <button style="background-color: #f77463; width: 100px; height: 35px; border-radius: 6px;margin: 3px;">
                                    <a class="danger" style="color: white; text-decoration: none;" href="delete_guest_info.php?id=<?php echo $row['id']; ?>">
                                        Delete
                                    </a>
                                </button>
                                </div>
                            </td>
                        </tr>

                        <?php
                    }
                }
                ?>

        </tbody>
    </table>

    </div>
    <br><br><br><br><br><br><br><br><br>


    <!---Footer-->
    <footer>

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