<?php

namespace Speicher210\Fastbill\Api\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Addon model.
 */
class Addon
{
    /**
     * The article number.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ARTICLE_NUMBER")
     */
    protected $articleNumber;

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
     * The title of the addon.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TITLE")
     */
    protected $title;

    /**
     * The description of the on.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DESCRIPTION")
     */
    protected $description;

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
     * VAT percent.
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("VAT_PERCENT")
     */
    protected $vatPercent;

    /**
     * Constructor.
     *
     * @param string $articleNumber The article number.
     * @param integer $quantity The quantity.
     * @param string $title The title.
     * @param string $description The description.
     * @param float $unitPrice The price.
     * @param float $vatPercent The VAT percentage.
     */
    public function __construct($articleNumber, $quantity, $title, $description, $unitPrice, $vatPercent)
    {
        $this->setArticleNumber($articleNumber);
        $this->setQuantity($quantity);
        $this->setTitle($title);
        $this->setDescription($description);
        $this->setUnitPrice($unitPrice);
        $this->setVatPercent($vatPercent);
    }

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
     * @param string $articleNumber The article number.
     * @return $this
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
     * @param integer $quantity The quantity.
     * @return $this
     */
    public function setQuantity($quantity)
    {
        if ($quantity < 1) {
            throw new \InvalidArgumentException('Quantity must be bigger than 0.');
        }
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
     * @return $this
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
     * @param string $description The description.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

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
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Get the VAT percentage.
     *
     * @return float
     */
    public function getVatPercent()
    {
        return $this->vatPercent;
    }

    /**
     * Set the VAT percentage.
     *
     * @param float $vatPercent The VAT percentage.
     * @return $this
     */
    public function setVatPercent($vatPercent)
    {
        if ($vatPercent < 0 || $vatPercent > 100) {
            throw new \InvalidArgumentException('VAT percentage must be between 0-100');
        }
        $this->vatPercent = $vatPercent;

        return $this;
    }
}
