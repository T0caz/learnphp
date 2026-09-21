<?php

use App\Controllers\PublicController;
use App\Router;

Router::addRoute('/', [PublicController::class, 'index']);

Router::addRoute('/us', [PublicController::class, 'us']);

Router::addRoute('/technology', [PublicController::class, 'technology']);

Router::addRoute('/forms', [PublicController::class, 'forms']);
?>