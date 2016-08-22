<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\Update;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractRequestData;
use Speicher210\Fastbill\Api\Model\Feature;

/**
 * The request data for updating a subscription.
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
     *  The subscription next event.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("NEXT_EVENT")
     */
    protected $nextEvent;

    /**
     * The external subscription ID.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("SUBSCRIPTION_EXT_UID")
     */
    protected $subscriptionExternalId;

    /**
     * The subscription status.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("STATUS")
     */
    protected $status;

    /**
     * The subscription X-Attribute.
     *
     * @var array
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("X_ATTRIBUTES")
     */
    protected $xAttributes = array();

    /**
     * Product features.
     *
     * @var array
     *
     * @JMS\Type("array<Speicher210\Fastbill\Api\Model\Feature>")
     * @JMS\SerializedName("FEATURES")
     */
    protected $features = array();

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
     * Get the subscription ID of the request body.
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
    }

    /**
     * Get the next event date and time.
     *
     * @return \DateTime
     */
    public function getNextEvent()
    {
        return $this->nextEvent;
    }

    /**
     * Set the next event date and time.
     *
     * @param \DateTime $nextEvent The next event date and time.
     * @return RequestData
     */
    public function setNextEvent(\DateTime $nextEvent = null)
    {
        $this->nextEvent = $nextEvent;

        return $this;
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
     * Get the subscription status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the subscription status.
     *
     * @param string $status The subscription status.
     * @return RequestData
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return array
     */
    public function getXAttributes()
    {
        return $this->xAttributes;
    }

    /**
     * Set the subscription x attributes.
     *
     * @param array $xAttributes The subscription x attributes
     * @return RequestData
     */
    public function setXAttributes(array $xAttributes)
    {
        $this->xAttributes = $xAttributes;

        return $this;
    }

    /**
     * Get the features.
     *
     * @return array
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Set the features.
     *
     * @param Feature[] $features The features.
     * @return RequestData
     */
    public function setFeatures(array $features)
    {
        $this->features = $features;

        return $this;
    }
}
