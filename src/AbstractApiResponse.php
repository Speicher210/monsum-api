<?php

namespace Speicher210\Fastbill\Api;

/**
 * Abstract API response.
 */
abstract class AbstractApiResponse implements ApiResponseInterface
{
    /**
     * The response part from the API Response.
     *
     * @var ResponseInterface
     */
    protected $response;

    /**
     * Get the response part of the API response.
     *
     * @return ResponseInterface
     */
    public function getResponse()
    {
        return $this->response;
    }
}
