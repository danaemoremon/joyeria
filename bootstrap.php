<?php
// src/bootstrap.php

use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\DriverManager;

// 1. Cargar el autoloader de Composer (corregido para salir de /src)
require_once __DIR__ . "/../vendor/autoload.php"; 

// 2. Configuración de la base de datos (XAMPP LOCAL)
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'u821594572_joyeria_db',
    'host'     => 'localhost',
);

// 3. Configuración para Doctrine 3 (Uso de Atributos)
$isDevMode = true;
// Indicamos que busque las entidades en la carpeta actual (src)
$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: array(__DIR__), 
    isDevMode: $isDevMode
);

// 4. Configurar la conexión y el EntityManager
$connection = DriverManager::getConnection($dbParams, $config);
$entityManager = new EntityManager($connection, $config);