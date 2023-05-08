<?php

define('MAGPIE_INTERNAL_CONTEXT', 'web');

/**
 * This is the file to be served to the public. It will handle all routes that
 * are not handled by other means. Point your web root directory to the directory
 * containing this file.
 */

use Magpie\System\Kernel\Kernel;
use Magpie\System\RunContexts\WebRunContext;

// Requires the autoloader
require __DIR__ . '/../vendor/autoload.php';

// Create the configuration and handover to the kernel
$config = require_once __DIR__ . '/../boot/config.php';

// Bootstrapping
$kernel = Kernel::boot(__DIR__ . '/../', $config);

// Handover
WebRunContext::capture()->safeRun();
