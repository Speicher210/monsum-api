<?php

namespace Speicher210\Fastbill\Api\Service\Customer\AddCredits;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractRequestData;

/**
 * The request for adding credits to the customers.
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
     * The customer ID.
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("AMOUNT")
     */
    protected $amount;

    /**
     * Constructor.
     *
     * @param integer $customerId The customer ID.
     * @param float $amount The amount of credit to add.
     */
    public function __construct($customerId, $amount)
    {
        $this->setCustomerId($customerId);
        $this->setAmount($amount);
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
     * @param integer $customerId The customer ID.
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    /**
     * Get the amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set the amount.
     *
     * @param float $amount The amount to add.
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
}
