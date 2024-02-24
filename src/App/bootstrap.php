<?php

declare(strict_types=1);

// without autoload
// include __DIR__ . "/../Framework/App.php";

// With autoload
require __DIR__ ."/../../vendor/autoload.php";


use Framework\App;

$app = new App();
$app->get('/');

dd($app);

return $app;

