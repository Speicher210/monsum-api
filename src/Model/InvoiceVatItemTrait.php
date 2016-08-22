<?php

namespace Speicher210\Fastbill\Api\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Trait for invoice VAT item.
 */
trait InvoiceVatItemTrait
{
    /**
     * The invoice item vat percent.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("VAT_PERCENT")
     */
    protected $vatPercent;

    /**
     * The invoice item vat value.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("VAT_VALUE")
     */
    protected $vatValue;

    /**
     * The invoice item complete net value.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("COMPLETE_NET")
     */
    protected $completeNet;

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
     */
    public function setVatPercent($vatPercent)
    {
        $this->vatPercent = $vatPercent;
    }

    /**
     * Get the VAT value.
     *
     * @return string
     */
    public function getVatValue()
    {
        return $this->vatValue;
    }

    /**
     * Set the VAT value.
     *
     * @param string $vatValue
     */
    public function setVatValue($vatValue)
    {
        $this->vatValue = $vatValue;
    }

    /**
     * Get the complete net value.
     *
     * @return string
     */
    public function getCompleteNet()
    {
        return $this->completeNet;
    }

    /**
     * Set the complete net value.
     *
     * @param string $completeNet
     */
    public function setCompleteNet($completeNet)
    {
        $this->completeNet = $completeNet;
    }
}
