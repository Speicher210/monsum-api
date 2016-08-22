<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\Get;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractResponse;

/**
 * Response when getting the subscriptions.
 */
class Response extends AbstractResponse
{
    /**
     * The subscriptions from the response.
     *
     * @var array
     *
     * @JMS\Type("array<Speicher210\Fastbill\Api\Model\Subscription>")
     * @JMS\SerializedName("SUBSCRIPTIONS")
     */
    protected $subscriptions = array();

    /**
     * Get the subscriptions from the response.
     *
     * @return \Speicher210\Fastbill\Api\Model\Subscription[]
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }
}
