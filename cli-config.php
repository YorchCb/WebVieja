<?php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array("model");
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver'  => 'pdo_mysql',
    'user'   => 'grupo7',
    'password' => 'thie9Ahba9',
    'dbname'  => 'grupo7',
);

// Any way to access the EntityManager from your application
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
$em = EntityManager::create($dbParams, $config);

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
));
return $helperSet;