<?php

declare(strict_types=1);

// without autoload
// include __DIR__ . "/../Framework/App.php";

// With autoload
require __DIR__ . "/../../vendor/autoload.php";
// use App\Controllers\HomeController;
// use App\Controllers\AboutController;


use Framework\App;
use App\Config\Paths;
use Dotenv\Dotenv;



use function App\Config\{registerRoutes, registerMiddleware};
$dotenv = Dotenv::createImmutable(Paths::ROOT);
$dotenv->safeLoad();

$app = new App(Paths::SOURCE . "app/container-definitions.php");
// $app->get('/', [HomeController::class, 'home']);
// $app->get('/about', [AboutController::class, 'about']);
registerRoutes($app);
registerMiddleware($app);
// dd($app);

return $app;

