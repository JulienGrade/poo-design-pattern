<?php
use App\Connection;

require_once 'vendor/autoload.php';

$connection = Connection::getInstance();
$connection2 = Connection::getInstance();
$connection3 = Connection::getInstance();

var_dump($connection === $connection2);