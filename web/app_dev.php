<?php
use TJM\Bundle\StandardEditionBundle\Component\Config;

// If you don't want to setup permissions the proper way, just uncomment the following PHP line
// read http://symfony.com/doc/current/book/installation.html#configuration-and-setup for more information
//umask(0000);

require_once __DIR__ . '/../app/init.php';
Config::setEnvironment('dev');
require __DIR__ . '/app.php';
