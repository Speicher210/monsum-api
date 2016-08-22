<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\ChangeArticle;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractResponse;

/**
 * Response when changing article of the subscription.
 */
class Response extends AbstractResponse
{
    /**
     * The subscription id.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("SUBSCRIPTION_ID")
     */
    protected $subscriptionId;

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
     * @return RequestData
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;

        return $this;
    }
}
