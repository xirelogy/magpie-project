<?php

namespace App\Configurations;

use App\Routes\DefaultDomain;
use Magpie\Commands\CommandRegistry;
use Magpie\General\Traits\StaticCreatable;
use Magpie\Routes\RouteRegistry;
use Magpie\System\Concepts\SystemBootable;
use Magpie\System\Kernel\BootContext;
use Magpie\System\Kernel\BootRegistrar;

/**
 * Application directories
 */
class AppDirectories implements SystemBootable
{
    use StaticCreatable;


    /**
     * @inheritDoc
     */
    public static function systemBootRegister(BootRegistrar $registrar) : bool
    {
        return true;
    }


    /**
     * @inheritDoc
     */
    public static function systemBoot(BootContext $context) : void
    {
        CommandRegistry::includeDirectory(__DIR__ . '/../Commands');
        RouteRegistry::includeDomain(DefaultDomain::instance());
    }
}