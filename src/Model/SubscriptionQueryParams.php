<?php

namespace Speicher210\Monsum\Api\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Subscription query parameters.
 */
class SubscriptionQueryParams
{
    /**
     * The external subscription ID.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("subscription_ext_uid")
     */
    private $subscriptionExternalId;

    /**
     * The subscription title.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("subscription_title")
     */
    private $subscriptionTitle;

    /**
     * The subscription start.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("start")
     */
    private $subscriptionStart;

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
     * @return SubscriptionQueryParams
     */
    public function setSubscriptionExternalId($subscriptionExternalId)
    {
        $this->subscriptionExternalId = $subscriptionExternalId;

        return $this;
    }

    /**
     * Get the subscription title.
     *
     * @return string
     */
    public function getSubscriptionTitle()
    {
        return $this->subscriptionTitle;
    }

    /**
     * Set the subscription title.
     *
     * @param string $subscriptionTitle The title.
     * @return SubscriptionQueryParams
     */
    public function setSubscriptionTitle($subscriptionTitle)
    {
        $this->subscriptionTitle = $subscriptionTitle;

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
     * @param \DateTime $subscriptionStart
     * @return $this
     */
    public function setSubscriptionStart($subscriptionStart)
    {
        $this->subscriptionStart = $subscriptionStart;

        return $this;
    }

    private function toArray()
    {
        return [
            'subscription_ext_uid' => $this->subscriptionExternalId,
            'subscription_title' => $this->subscriptionTitle,
            'start' => $this->subscriptionStart !== null ? $this->subscriptionStart->format('Y-m-d H:i:s') : null
        ];
    }

    public function __toString()
    {
        $query = \http_build_query($this->toArray(), null, '&');
        if ('' !== $query) {
            $query = '&' . $query;
        }

        return $query;
    }
}
