<?php

namespace App\Configurations;

use Magpie\Configurations\AppConfig as MagpieAppConfig;
use Magpie\Facades\Mime\Resolvers\ApacheOrgMimeResolver;
use Magpie\Queues\Providers\Generators\RandomIdentityProvider;
use Magpie\System\Kernel\Kernel;

/**
 * Specific application configuration
 */
class AppConfig extends MagpieAppConfig
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @inheritDoc
     */
    public function getBootRegistrableClasses() : iterable
    {
        yield from parent::getBootRegistrableClasses();

        yield AppDirectories::class;
    }


    /**
     * @inheritDoc
     */
    protected function onInitialize(Kernel $kernel) : void
    {
        parent::onInitialize($kernel);

        (new RandomIdentityProvider())->registerAsDefaultProvider();

        ApacheOrgMimeResolver::instance()->registerAsDefaultProvider();
    }
}