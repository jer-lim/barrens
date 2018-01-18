<?php
declare(strict_types=1);

define("APP_PATH", __DIR__ . "/../src");

// Use Composer autoloader
require __DIR__ . "/../vendor/autoload.php";

// load routes
require_once __DIR__ . "/../routes.php";

// Load appropriate route
\Barrens\Router\Route::handleRoute();
