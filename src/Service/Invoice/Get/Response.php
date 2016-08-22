<?php

namespace Speicher210\Fastbill\Api\Service\Invoice\Get;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractResponse;

/**
 * Response when getting the invoices.
 */
class Response extends AbstractResponse
{
    /**
     * The invoices from the response.
     *
     * @var array
     *
     * @JMS\Type("array<Speicher210\Fastbill\Api\Model\Invoice>")
     * @JMS\SerializedName("INVOICES")
     */
    protected $invoices = array();

    /**
     * Get the subscriptions from the response.
     *
     * @return \Speicher210\Fastbill\Api\Model\Invoice[]
     */
    public function getInvoices()
    {
        return (array) $this->invoices;
    }
}
