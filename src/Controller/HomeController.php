<?php

namespace App\Controller;

use App\Core\Application;
use App\Core\Route;

class HomeController
{
    #[Route('GET', '/')]
    #[Route('GET', '/home')]
    public function home(): bool|string
    {
        return Application::$app->view->render('home');
    }
}