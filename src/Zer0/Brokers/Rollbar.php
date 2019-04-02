<?php

namespace Zer0\Brokers;

use Rollbar\Payload\Level;
use PHPDaemon\Core\ClassFinder;
use Rollbar\RollbarLogger;
use Zer0\Config\Interfaces\ConfigInterface;
use Zer0\Helpers\ErrorsAreExceptions;

/**
 * Class Rollbar
 * @package Zer0\Brokers
 */
class Rollbar extends Base
{
    /**
     * @param ConfigInterface $config
     * @return RollbarLogger
     */
    public function instantiate(ConfigInterface $config): RollbarLogger
    {
        \Rollbar\Rollbar::init(
            array(
                'access_token' => $config->access_token,
                'environment' => $config->environment,
            )
        );
        return \Rollbar\Rollbar::logger();
    }
}
