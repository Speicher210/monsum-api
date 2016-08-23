<?php

namespace Speicher210\Monsum\Api;

/**
 * Interface for API responses.
 */
interface ApiResponseInterface
{
    /**
     * Get the response data.
     *
     * @return ResponseInterface
     */
    public function getResponse();
}
