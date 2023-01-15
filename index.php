<?php

use App\Factory\MySQLFactory;
use App\Application;

require_once __DIR__ . '/vendor/autoload.php';

$application = new Application(
    new MySQLFactory()
);