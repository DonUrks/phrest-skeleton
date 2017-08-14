<?php
chdir(dirname(__DIR__));
require_once "vendor/autoload.php";

// start the API
\Phrest\Application::run('phrest-skeleton');