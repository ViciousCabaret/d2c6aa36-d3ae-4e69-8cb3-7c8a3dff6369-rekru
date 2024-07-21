<?php

use Framework\App\App;

require __DIR__ . '/../bootstrap/bootstrap.php';

/** @var \Framework\Http\Request\RequestProcessorInterface $requestProcessor */
$app = new App($requestProcessor);
require __DIR__ . '/../bootstrap/routes.php';

$app->run();
exit;