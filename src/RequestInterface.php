<?php

namespace Speicher210\Fastbill\Api;

/**
 * Interface for all request objects to fastbill API.
 */
interface RequestInterface
{
    /**
     * Get the name of the service.
     *
     * @return string
     */
    public function getService();
}
