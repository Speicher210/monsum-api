<?php

namespace Speicher210\Fastbill\Api;

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
