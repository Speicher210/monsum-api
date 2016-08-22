<?php

namespace Speicher210\Fastbill\Api\Service\Customer\Update;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractRequestData;
use Speicher210\Fastbill\Api\Model\CustomerTrait;

/**
 * The request for updating the customers.
 */
final class RequestData extends AbstractRequestData
{
    use CustomerTrait;

    /**
     * FLag if sending the confirmation email should be sent.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("SUPPRESS_MAIL")
     */
    protected $suppressEmail;

    /**
     * Constructor.
     *
     * @param integer $customerId The customer ID to update.
     */
    public function __construct($customerId)
    {
        $this->setCustomerId($customerId);
    }

    /**
     * Get if sending confirmation email is suppressed.
     *
     * @return boolean
     */
    public function getSuppressEmail()
    {
        return (boolean) $this->suppressEmail;
    }

    /**
     * Set if the confirmation email should be suppressed.
     *
     * @param boolean $suppressEmail Flag if the confirmation email should be suppressed.
     * @return RequestData
     */
    public function setSuppressEmail($suppressEmail)
    {
        $this->suppressEmail = (integer)(boolean)$suppressEmail;
    }
}
