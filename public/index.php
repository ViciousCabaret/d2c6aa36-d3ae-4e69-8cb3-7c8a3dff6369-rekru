<?php

use App\Http\Controller\MainController;

require_once __DIR__ . '/vendor/autoload.php';

$mainController = new MainController();
$mainController->process();

exit;