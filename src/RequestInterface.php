<?php

namespace Speicher210\Monsum\Api;

/**
 * Interface for all request objects to Monsum API.
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
