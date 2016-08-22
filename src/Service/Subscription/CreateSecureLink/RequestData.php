<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\CreateSecureLink;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractRequestData;

/**
 * The request for creating secure links to a subscription.
 */
final class RequestData extends AbstractRequestData
{
    /**
     * The subscription ID.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("SUBSCRIPTION_ID")
     */
    protected $subscriptionId;

    /**
     * Constructor.
     *
     * @param integer $subscriptionId The subscription ID.
     */
    public function __construct($subscriptionId)
    {
        $this->setSubscriptionId($subscriptionId);
    }

    /**
     * Get the subscription ID.
     *
     * @return integer
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * Set the subscription ID.
     *
     * @param integer $subscriptionId The subscription ID.
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;
    }
}
