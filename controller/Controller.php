<?php

abstract class Controller
{
    public function render($template, $args = []){
        $args += array(
            'title' => 'Home',
        );
        echo TwigView::getTwig()->render($template, $args);
    }

    public function getConnection(){
        $config = \Doctrine\ORM\Tools\Setup::createConfiguration(false);
        $driverImpl = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(new \Doctrine\Common\Annotations\AnnotationReader(), '/model');
        \Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');
        $config->setMetadataDriverImpl($driverImpl);
        $connectionOptions = array(
            'driver'   => 'pdo_mysql',
            'user'     => 'root',
            'password' => '',
            'dbname'   => 'my_project',
        );

        $em = \Doctrine\ORM\EntityManager::create($connectionOptions, $config);
        return $em;
    }
}