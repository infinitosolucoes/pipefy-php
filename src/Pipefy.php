<?php

namespace PipefyPHP;

use Exception\TokenNotPresent;

/**
 * The Pipefy client.
 * Works as a know it all class that keeps the API packaged.
 *
 * @package PipefyPHP
 */
class Pipefy
{
    /**
     * @var array
     */
    private $config = [];

    /**
     * Initializes configuration parameters and resources
     *
     * @param array $config
     */
    public function __construct(array $config)
    {
        if (!isset($config['token'])) {
            throw new TokenNotPresent();
        }

        $defaultConfig = [
            'endpoint' => 'https://app.pipefy.com/queries',
        ];

        $this->config = array_merge($defaultConfig, $config);
    }
}
