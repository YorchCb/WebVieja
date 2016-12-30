<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);
session_start();

require_once 'controller/Controller.php';
require_once 'controller/HomeController.php';

require_once 'repository/PDORepository.php';

require_once 'view/TwigView.php';

if(isset($_GET['action']) and $_GET['action'] != 'home') {
	if($_GET["action"]=="bt1"){
 		HomeController::getInstance()->bt1();}
 	if($_GET["action"]=="bt4"){
 		HomeController::getInstance()->bt4();}
 	if($_GET["action"]=="gtav"){
 		HomeController::getInstance()->gtav();}
}else{
    HomeController::getInstance()->home();
}