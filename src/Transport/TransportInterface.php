<?php

namespace Speicher210\Fastbill\Api\Transport;

use Speicher210\Fastbill\Api\ApiCredentials;

/**
 * Interface for the transport classes of the request to the API.
 */
interface TransportInterface
{
    const BASE_URL = 'https://app.monsum.com/api/1.0/api.php';

    /**
     * Set the Fastbill API credentials.
     *
     * @param ApiCredentials $credentials The credentials to set.
     * @return TransportInterface
     */
    public function setCredentials(ApiCredentials $credentials);

    /**
     * Get the Fastbill API credentials.
     *
     * @return ApiCredentials
     */
    public function getCredentials();

    /**
     * Send a request to Fastbill API.
     *
     * @param string $body The request body.
     * @return string The response from the API.
     */
    public function sendRequest($body);
}
