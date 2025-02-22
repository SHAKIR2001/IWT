<?php

include "config.php";


session_start();

//This function is used to free all session variables currently registered. It effectively removes all variables stored in the session.
session_unset();

//This function is used to destroy the current session. It clears all session data and effectively "logs out" the user from the session.
session_destroy();

header("Location:login.html");

?>
