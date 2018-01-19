<?php
declare(strict_types=1);

use \Barrens\Router\Route;

Route::get("/", "\Controller\IndexController", "main");
