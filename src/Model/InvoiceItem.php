<?php

namespace Speicher210\Fastbill\Api\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Invoice item model.
 */
class InvoiceItem
{
    use InvoiceVatItemTrait;

    /**
     * The invoice item id.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("INVOICE_ITEM_ID")
     */
    protected $invoiceItemId;

    /**
     * The invoice item article number.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ARTICLE_NUMBER")
     */
    protected $articleNumber;

    /**
     * The invoice item description.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DESCRIPTION")
     */
    protected $description;

    /**
     * The invoice item quantity.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("QUANTITY")
     */
    protected $quantity;

    /**
     * The invoice item unit price.
     *
     * @var float
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("UNIT_PRICE")
     */
    protected $unitPrice;

    /**
     * The invoice item complete gross value.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("COMPLETE_GROSS")
     */
    protected $completeGross;

    /**
     * The invoice item sort order.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("SORT_ORDER")
     */
    protected $sortOrder;

    /**
     * Get the invoice item id.
     *
     * @return string
     */
    public function getInvoiceItemId()
    {
        return $this->invoiceItemId;
    }

    /**
     * Set the invoice item id.
     *
     * @param string $invoiceItemId
     */
    public function setInvoiceItemId($invoiceItemId)
    {
        $this->invoiceItemId = $invoiceItemId;
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
     * @param string $articleNumber
     */
    public function setArticleNumber($articleNumber)
    {
        $this->articleNumber = $articleNumber;
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
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
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
     * @param float $unitPrice
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * Get the complete gross value.
     *
     * @return string
     */
    public function getCompleteGross()
    {
        return $this->completeGross;
    }

    /**
     * Set the complete gross value.
     *
     * @param string $completeGross
     */
    public function setCompleteGross($completeGross)
    {
        $this->completeGross = $completeGross;
    }

    /**
     * Get the sort order.
     *
     * @return integer
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Set the sort order.
     *
     * @param integer $sortOrder
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }
}
