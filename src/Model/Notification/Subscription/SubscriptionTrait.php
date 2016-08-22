<?php

namespace Speicher210\Fastbill\Api\Model\Notification\Subscription;

use JMS\Serializer\Annotation as JMS;

/**
 * Trait for subscription data in a notification model.
 */
trait SubscriptionTrait
{
    /**
     * The subscription ID.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("subscription_id")
     */
    protected $subscriptionId;

    /**
     * The external subscription ID.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("subscription_ext_uid")
     */
    protected $subscriptionExternalId;

    /**
     * The subscription hash.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("hash")
     */
    protected $hash;

    /**
     * The subscription article code.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("article_code")
     */
    protected $articleCode;

    /**
     * The subscription quantity.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("quantity")
     */
    protected $quantity;

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
     * @param integer $subscriptionId
     * @return $this
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * Get the subscription external ID.
     *
     * @return string
     */
    public function getSubscriptionExternalId()
    {
        return $this->subscriptionExternalId;
    }

    /**
     * Set the subscription external ID.
     *
     * @param string $subscriptionExternalId The subscription external ID.
     * @return $this
     */
    public function setSubscriptionExternalId($subscriptionExternalId)
    {
        $this->subscriptionExternalId = $subscriptionExternalId;

        return $this;
    }

    /**
     * Get the hash.
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set the hash.
     *
     * @param string $hash The hash.
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get the article code.
     *
     * @return string
     */
    public function getArticleCode()
    {
        return $this->articleCode;
    }

    /**
     * Set the article code.
     *
     * @param string $articleCode The article code.
     * @return $this
     */
    public function setArticleCode($articleCode)
    {
        $this->articleCode = $articleCode;

        return $this;
    }

    /**
     * Get the quantity.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the quantity.
     *
     * @param integer $quantity The quantity.
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }
}
