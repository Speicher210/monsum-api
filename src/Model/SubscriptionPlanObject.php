<?php

namespace Speicher210\Fastbill\Api\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Subscription plan object data.
 */
class SubscriptionPlanObject
{
    /**
     * The subscription plan article number.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ARTICLE_NUMBER")
     */
    protected $articleNumber;

    /**
     * The subscription plan quantity.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("QUANTITY")
     */
    protected $quantity;

    /**
     * The subscription plan title.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TITLE")
     */
    protected $title;

    /**
     * The subscription plan description.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DESCRIPTION")
     */
    protected $description;

    /**
     * The subscription plan unit price.
     *
     * @var float
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("UNIT_PRICE")
     */
    protected $unitPrice;


    /**
     * The subscription plan vat percent.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("VAT_PERCENT")
     */
    protected $vatPercent;

    /**
     * Get the article number.
     *
     * @return integer
     */
    public function getArticleNumber()
    {
        return $this->articleNumber;
    }

    /**
     * Set the article number.
     *
     * @param string $articleNumber
     * @return SubscriptionPlanObject
     */
    public function setArticleNumber($articleNumber)
    {
        $this->articleNumber = $articleNumber;

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
     * @param integer $quantity
     * @return SubscriptionPlanObject
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the title.
     *
     * @param string $title The title.
     * @return SubscriptionPlanObject
     */
    public function setTitle($title)
    {
        $this->title = $title;

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
     * @param string $description
     * @return SubscriptionPlanObject
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the unit price.
     *
     * @return string
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Set the unit price.
     *
     * @param float $unitPrice The price
     * @return SubscriptionPlanObject
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Get the VAT percent.
     *
     * @return string
     */
    public function getVatPercent()
    {
        return $this->vatPercent;
    }

    /**
     * Set the VAT percent.
     *
     * @param string $vatPercent
     * @return SubscriptionPlanObject
     * @throws \InvalidArgumentException If the VAT is not between 0 - 100.
     */
    public function setVatPercent($vatPercent)
    {
        if ($vatPercent < 0 || $vatPercent > 100) {
            throw new \InvalidArgumentException('VAT must be between 0 - 100');
        }
        $this->vatPercent = $vatPercent;

        return $this;
    }
}
