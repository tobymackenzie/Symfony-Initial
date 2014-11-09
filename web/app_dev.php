<?php
use TJM\Bundle\StandardEditionBundle\Component\App\App;

$loader = require_once __DIR__ . '/../app/bootstrap.php.cache';
App::setEnvironment('dev');
require __DIR__ . '/app.php';
