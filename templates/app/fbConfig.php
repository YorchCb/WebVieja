<?php
session_start();

//Include Facebook SDK
require_once 'inc/facebook.php';

/*
 * Configuration and setup FB API
 */
$appId = '1197905113621557'; //Facebook App ID
$appSecret = '02e235519eecc0bee33e184407ec9b9c'; // Facebook App Secret
$redirectURL = 'http://localhost/'; // Callback URL
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));
$fbUser = $facebook->getUser();
?>