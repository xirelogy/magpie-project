<?php

namespace App\Routes;

use Magpie\General\Traits\SingletonInstance;
use Magpie\Routes\RouteDomain;

/**
 * Default domain
 */
class DefaultDomain extends RouteDomain
{
    use SingletonInstance;


    /**
     * Constructor
     */
    protected function __construct()
    {
        parent::__construct(null);
    }


    /**
     * @inheritDoc
     */
    protected function getControllerDirectories() : iterable
    {
        yield __DIR__ . '/../Controllers/Default';
    }
}