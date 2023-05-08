#!/usr/bin/env php
<?php

define('MAGPIE_INTERNAL_CONTEXT', 'console');

/**
 * This is the file to support running of console.
 */

use Magpie\System\Kernel\Kernel;
use Magpie\System\RunContexts\ConsoleRunContext;

// Requires the autoloader
require __DIR__ . '/vendor/autoload.php';

// Create the configuration and handover to the kernel
$config = require_once __DIR__ . '/boot/config.php';

// Bootstrapping
$kernel = Kernel::boot(__DIR__, $config);

// Handover
ConsoleRunContext::capture()->safeRun();
exit(ConsoleRunContext::getLastExitCode());