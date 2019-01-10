<?php

/**
 * Configuration for database connection
 *
 */

$host       = "unique_name";
$username   = "root";
$password   = "123";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );