<?php
require_once "vendor/autoload.php";
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$entidades = array("app/*/model/entity/");
$isDevMode = true;
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => 'root',
    'dbname'   => 'todo_list',
);
$config = Setup::createAnnotationMetadataConfiguration($entidades, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);