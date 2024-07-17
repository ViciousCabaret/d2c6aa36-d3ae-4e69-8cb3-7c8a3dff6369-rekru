<?php

use App\Http\Controller\MainController;
use Framework\App\App;

//var_dump(file_get_contents(__DIR__ . '/../bootstrap/bootstrap.php')); die;
require __DIR__ . '/../bootstrap/bootstrap.php';

/** @var \Framework\Http\Request\RequestProcessorInterface $requestProcessor */
$app = new App($requestProcessor);
require __DIR__ . '/../bootstrap/routes.php';

$app->run();


//$mainController = new MainController();
//$mainController->process();

exit;