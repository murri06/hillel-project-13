<?php

require_once __DIR__ . "/../composer/vendor/autoload.php";

use App\Controller\HomeController;
use App\Core\Application;


$app = new Application();

$app->registerControllers([HomeController::class]);

$app->run();