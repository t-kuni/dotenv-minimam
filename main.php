<?php

require_once __DIR__ . "/vendor/autoload.php";

use Dotenv\Dotenv;

$dotenv = new Dotenv(__DIR__);
$dotenv->overload();
echo getenv('LC_ALL');
