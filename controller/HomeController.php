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

     public function login(){
        $this->render('login.php');
    }
    
    public function logout(){
        $this->render('app/logout.php');
    }

    public function bt1(){
        $this->render('bt1.php.twig');
	}

    public function bt4(){
        $this->render('bt4.php.twig');
    }

    public function gtav(){
        $this->render('gtav.php.twig');
    }

}