<?php

declare(strict_types=1);

// without autoload
// include __DIR__ . "/../Framework/App.php";

// With autoload
require __DIR__ ."/../../vendor/autoload.php";
// use App\Controllers\HomeController;
// use App\Controllers\AboutController;


use Framework\App;
use function App\Config\registerRoutes;

$app = new App();
// $app->get('/', [HomeController::class, 'home']);
// $app->get('/about', [AboutController::class, 'about']);
registerRoutes($app);
// dd($app);

return $app;

