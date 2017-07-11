<?php

namespace Speicher210\Monsum\Api\Service\Invoice\Get;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Monsum\Api\AbstractResponse;

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
     * @JMS\Type("array<Speicher210\Monsum\Api\Model\Invoice>")
     * @JMS\SerializedName("INVOICES")
     */
    protected $invoices = [];

    /**
     * Get the subscriptions from the response.
     *
     * @return \Speicher210\Monsum\Api\Model\Invoice[]
     */
    public function getInvoices()
    {
        return (array) $this->invoices;
    }
}
