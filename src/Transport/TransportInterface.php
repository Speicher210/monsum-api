<?php

namespace Speicher210\Monsum\Api\Transport;

use Speicher210\Monsum\Api\ApiCredentials;

/**
 * Interface for the transport classes of the request to the API.
 */
interface TransportInterface
{
    const BASE_URL = 'https://app.monsum.com/api/1.0/api.php';

    /**
     * Set the Monsum API credentials.
     *
     * @param ApiCredentials $credentials The credentials to set.
     * @return TransportInterface
     */
    public function setCredentials(ApiCredentials $credentials);

    /**
     * Get the Monsum API credentials.
     *
     * @return ApiCredentials
     */
    public function getCredentials();

    /**
     * Send a request to Monsum API.
     *
     * @param string $body The request body.
     * @return string The response from the API.
     */
    public function sendRequest($body);
}
