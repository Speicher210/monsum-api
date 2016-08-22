<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\GetUsageData;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractResponse;

/**
 * Response when getting usage data for a subscription.
 */
class Response extends AbstractResponse
{
    /**
     * The usage data ID.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("USAGEDATA_ID")
     */
    protected $usageDataId;

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
     * The subscription ID.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("SUBSCRIPTION_ID")
     */
    protected $subscriptionId;

    /**
     * The article ID.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("ARTICLE_ID")
     */
    protected $articleId;

    /**
     * The unit price.
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("UNIT_PRICE")
     */
    protected $unitPrice;

    /**
     * The description of the addon.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DESCRIPTION")
     */
    protected $description;

    /**
     * The currency code.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CURRENCY_CODE")
     */
    protected $currencyCode;

    /**
     * The usage date.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("USAGE_DATE")
     */
    protected $usageDate;

    /**
     * Date of creation.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("CREATED")
     */
    protected $created;

    /**
     * Quantity.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("QUANTITY")
     */
    protected $quantity;

    /**
     * Get the usage data ID.
     *
     * @return string
     */
    public function getUsageDataId()
    {
        return $this->usageDataId;
    }

    /**
     * Set the usage data ID.
     *
     * @param string $usageDataId The usage data ID.
     * @return Response
     */
    public function setUsageDataId($usageDataId)
    {
        $this->usageDataId = $usageDataId;

        return $this;
    }

    /**
     * Get the customer ID.
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
     * @param integer $customerId The ID.
     * @return Response
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
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
     * @return Response
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * Get the article ID.
     *
     * @return integer
     */
    public function getArticleId()
    {
        return $this->articleId;
    }

    /**
     * Set the subscription ID.
     *
     * @param integer $articleId The article ID.
     * @return Response
     */
    public function setArticleId($articleId)
    {
        $this->articleId = $articleId;

        return $this;
    }

    /**
     * Get the unit price.
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Set the unit price.
     *
     * @param float $unitPrice The price.
     * @return Response
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Get the description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     * @return Response
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the currency code.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set the currency code.
     *
     * @param string $currencyCode The currency code.
     * @return Response
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Get the usage date.
     *
     * @return \DateTime
     */
    public function getUsageDate()
    {
        return $this->usageDate;
    }

    /**
     * Set the usage date.
     *
     * @param \DateTime $usageDate The usage date.
     * @return Response
     */
    public function setUsageDate(\DateTime $usageDate)
    {
        $this->usageDate = $usageDate;

        return $this;
    }

    /**
     * Get the date and time when the user was created.
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set the date and time when the user was created.
     *
     * @param \DateTime $created The creation date and time.
     * @return Response
     */
    public function setCreated(\DateTime $created)
    {
        $this->created = $created;

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
     * @return Response
     */
    public function setQuantity($quantity)
    {
        if ($quantity < 1) {
            throw new \InvalidArgumentException('Quantity must be bigger than 0.');
        }
        $this->quantity = $quantity;

        return $this;
    }
}
