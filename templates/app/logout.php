<?php
//Include FB config file
require_once 'fbConfig.php';

//Unset user data from session
unset($_SESSION['userData']);

//Destroy session data
$facebook->destroySession();

//Redirect to homepage
$Redirect_page = 'http://localhost/?action=home';
header("Location: ".$Redirect_page);

?>