<?php
use TJM\Bundle\StandardEditionBundle\Component\Config;

require_once __DIR__ . '/../app/init.php';
Config::setEnvironment('dev');
require __DIR__ . '/app.php';
