<?php

namespace Speicher210\Fastbill\Api;

use JMS\Serializer\Annotation as JMS;

/**
 * Abstract request to fastbill API.
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
