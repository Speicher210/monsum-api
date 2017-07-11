<?php

namespace Speicher210\Monsum\Api\Service\Subscription\Get;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Monsum\Api\AbstractResponse;

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
     * @JMS\Type("array<Speicher210\Monsum\Api\Model\Subscription>")
     * @JMS\SerializedName("SUBSCRIPTIONS")
     */
    protected $subscriptions = [];

    /**
     * Get the subscriptions from the response.
     *
     * @return \Speicher210\Monsum\Api\Model\Subscription[]
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }
}
