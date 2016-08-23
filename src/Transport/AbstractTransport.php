<?php

namespace Speicher210\Monsum\Api\Transport;

use Speicher210\Monsum\Api\ApiCredentials;

/**
 * Abstract implementation for transport.
 */
abstract class AbstractTransport implements TransportInterface
{
    /**
     * The API credentials.
     *
     * @var ApiCredentials
     */
    protected $apiCredentials;

    /**
     * Constructor.
     *
     * @param ApiCredentials $credentials The API credentials.
     */
    public function __construct(ApiCredentials $credentials)
    {
        $this->setCredentials($credentials);
    }

    /**
     * {@inheritdoc}
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->apiCredentials = $credentials;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCredentials()
    {
        return $this->apiCredentials;
    }
}
