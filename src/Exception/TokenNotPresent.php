<?php

namespace PipefyPHP\Exception;

use InvalidArgumentException;

/**
 * Class TokenNotPresent
 *
 * @package PipefyPHP\Exception
 */
class TokenNotPresent extends InvalidArgumentException
{
    /**
     * TokenNotPresent constructor.
     */
    public function __construct($resource_name)
    {
        parent::__construct('You MUST provide a token');
    }
}
