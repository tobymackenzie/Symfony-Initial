<?php
use TJM\Bundle\StandardEditionBundle\Component\App\App;

$loader = require(__DIR__ . '/../src/autoload.php');
App::setEnvironment('dev');
require __DIR__ . '/app.php';
