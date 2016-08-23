<?php

namespace Speicher210\Monsum\Api;

use JMS\Serializer\Annotation as JMS;

/**
 * Abstract request to Monsum API.
 */
abstract class AbstractRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("SERVICE")
     */
    protected $service;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->service = $this->getService();
    }
}
