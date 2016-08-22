<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\Postpone;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractRequestData;

/**
 * The request for getting the upcoming amount.
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
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("MONTH")
     */
    protected $month;

    /**
     * Constructor.
     *
     * @param integer $subscriptionId The subscription ID.
     * @param integer $month The month to postpone.
     */
    public function __construct($subscriptionId, $month)
    {
        $this->setSubscriptionId($subscriptionId);
        $this->setMonth($month);
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

    /**
     * Get the month.
     *
     * @return integer
     */
    public function getMonth()
    {
        return (int) ltrim($this->month, '0');
    }

    /**
     * Set the month.
     *
     * @param integer $month The month for postponing.
     * @return RequestData
     */
    public function setMonth($month)
    {
        $this->month = str_pad($month, 2, '0', STR_PAD_LEFT);

        return $this;
    }
}
