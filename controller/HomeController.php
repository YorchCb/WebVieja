<?php

/**
 * Created by PhpStorm.
 * User: celtik
 * Date: 11/2/16
 * Time: 6:47 PM
 */
class HomeController extends Controller
{
    private static $instance;

    public static function getInstance(){

        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct(){

    }

    public function home(){
        $this->render('home.php.twig');
    }
    
    public function logout(){
        $this->render('app/logout.php');
    }
	
}