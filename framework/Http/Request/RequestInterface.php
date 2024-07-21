<?php

namespace Framework\Http\Request;

interface RequestInterface
{
    public function getContent(): array;
}