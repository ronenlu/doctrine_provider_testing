<?php
// bootstrap.php
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Attributes
$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: array(__DIR__."/src"),
    isDevMode: true,
);

// configuring the database connection
$connection = DriverManager::getConnection([
    // mysql
    'driver' => 'pdo_pgsql',
], null);

// obtaining the entity manager
$entityManager = new EntityManager($connection, $config);