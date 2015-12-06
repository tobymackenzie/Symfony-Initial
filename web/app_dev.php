<?php
use TJM\Bundle\StandardEditionBundle\Component\App\App;

$loader = require_once __DIR__ . '/../app/autoload.php';
App::setEnvironment('dev');
require __DIR__ . '/app.php';
