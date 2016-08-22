<?php

namespace Speicher210\Fastbill\Api\Service\Customer\Delete;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractRequestData;

/**
 * The request for deleting a customer.
 */
final class RequestData extends AbstractRequestData
{
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
     * Constructor.
     *
     * @param integer $customerId The customer ID.
     */
    public function __construct($customerId)
    {
        $this->setCustomerId($customerId);
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
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }
}
