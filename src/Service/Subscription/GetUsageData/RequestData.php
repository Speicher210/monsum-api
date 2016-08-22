<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\GetUsageData;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractRequestData;

/**
 * The request data for getting usage data for a subscription.
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
     * The subscription start.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("START")
     */
    protected $subscriptionStart;

    /**
     * The subscription end.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("END")
     */
    protected $subscriptionEnd;

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
     * @return RequestData
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * Get the subscription start.
     *
     * @return \DateTime
     */
    public function getSubscriptionStart()
    {
        return $this->subscriptionStart;
    }

    /**
     * Set the subscription start.
     *
     * @param \DateTime $subscriptionStart The subscription start.
     * @return RequestData
     */
    public function setSubscriptionStart($subscriptionStart)
    {
        $this->subscriptionStart = $subscriptionStart;

        return $this;
    }

    /**
     * Get the subscription end.
     *
     * @return \DateTime
     */
    public function getSubscriptionEnd()
    {
        return $this->subscriptionEnd;
    }

    /**
     * Set the subscription end.
     *
     * @param \DateTime $subscriptionEnd The subscription end.
     * @return RequestData
     */
    public function setSubscriptionEnd($subscriptionEnd)
    {
        $this->subscriptionEnd = $subscriptionEnd;

        return $this;
    }
}
