<?php

namespace Speicher210\Monsum\Api;

/**
 * Interface for all request objects to Monsum API.
 */
interface RequestInterface
{
    /**
     * Maximum number of elements for the retrieval defined in Monsum.
     */
    const MAX_LIST_LIMIT = 100;

    /**
     * Get the name of the service.
     *
     * @return string
     */
    public function getService();
}
