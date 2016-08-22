<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\Get;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractRequestData;

/**
 * The request data for getting the subscriptions.
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
     * The customer ID.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("CUSTOMER_ID")
     */
    protected $customerId;

    /**
     * The subscription external ID.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("SUBSCRIPTION_EXT_UID")
     */
    protected $subscriptionExternalId;

    /**
     * The customer external ID.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CUSTOMER_EXT_UID")
     */
    protected $externalCustomerId;

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
     * Get the customer ID of the request body.
     *
     * @return integer
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set the customer ID.
     *
     * @param integer $customerId The customer ID.
     * @return RequestData
     */
    public function setCustomerId($customerId)
    {
        return $this->customerId = $customerId;
    }

    /**
     * Get the external subscription ID.
     *
     * @return string
     */
    public function getSubscriptionExternalId()
    {
        return $this->subscriptionExternalId;
    }

    /**
     * Set the external subscription ID.
     *
     * @param string $subscriptionExternalId The external subscription ID.
     * @return RequestData
     */
    public function setSubscriptionExternalId($subscriptionExternalId)
    {
        $this->subscriptionExternalId = $subscriptionExternalId;

        return $this;
    }

    /**
     * Get the external customer ID.
     *
     * @return string
     */
    public function getExternalCustomerId()
    {
        return $this->externalCustomerId;
    }

    /**
     * Set the external customer ID.
     *
     * @param string $externalCustomerId The external customer ID.
     * @return RequestData
     */
    public function setExternalCustomerId($externalCustomerId)
    {
        $this->externalCustomerId = $externalCustomerId;

        return $this;
    }
}
