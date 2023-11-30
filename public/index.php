<?php

require_once __DIR__ . "/../composer/vendor/autoload.php";

use App\Controller\{FormController, HomeController};
use App\Core\Application;


$app = new Application();

$app->registerControllers([HomeController::class, FormController::class]);

$app->run();