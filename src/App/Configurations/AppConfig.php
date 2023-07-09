<?php

namespace App\Configurations;

use Magpie\Configurations\AppConfig as MagpieAppConfig;
use Magpie\Facades\Mime\Resolvers\ApacheOrgMimeResolver;
use Magpie\Queues\Providers\Generators\RandomQueueIdentityProvider;
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

        yield AppRegistrar::class;
    }


    /**
     * @inheritDoc
     */
    protected function onInitialize(Kernel $kernel) : void
    {
        parent::onInitialize($kernel);

        (new RandomQueueIdentityProvider())->registerAsDefaultProvider();

        ApacheOrgMimeResolver::instance()->registerAsDefaultProvider();
    }
}