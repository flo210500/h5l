<?php

namespace App\Middleware;

/**
 * 
 */
class BaseMiddleware
{
    protected $container; 

    function __construct($container)
    {
        $this->container = $container;
    }
}