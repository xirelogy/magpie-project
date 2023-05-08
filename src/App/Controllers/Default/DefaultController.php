<?php

namespace App\Controllers\Default;

use Magpie\Controllers\Controller;
use Magpie\HttpServer\Request;
use Magpie\Routes\Annotations\RouteEntry;

/**
 * Default controller
 */
class DefaultController extends Controller
{
    /**
     * Default route
     * @param Request $request
     * @return mixed
     */
    #[RouteEntry('/')]
    public function getRoot(Request $request) : mixed
    {
        _used($request);

        return 'Hello, world';
    }
}