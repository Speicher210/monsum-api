<?php

namespace Speicher210\Fastbill\Api\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Invoice vat item model.
 */
class InvoiceVatItem
{
    use InvoiceVatItemTrait;

    /**
     * Constructor.
     *
     * @param string $vatPercent The vat percent.
     * @param integer $vatValue The vat value.
     * @param string $completeNet The complete net.
     */
    public function __construct($vatPercent, $vatValue, $completeNet)
    {
        $this->setVatPercent($vatPercent);
        $this->setVatValue($vatValue);
        $this->setCompleteNet($completeNet);
    }
}
