<?php

namespace Framework\Http;

use Framework\Http\Request\RequestInterface;

interface ControllerInterface
{
    public function execute(RequestInterface $request);
}