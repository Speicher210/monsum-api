<?php

namespace Speicher210\Fastbill\Api\Service\Customer\Create;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractRequest;
use Speicher210\Fastbill\Api\Model\Customer;

/**
 * The request for creating the customers.
 */
class Request extends AbstractRequest
{
    /**
     * @var Customer
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Model\Customer")
     * @JMS\SerializedName("DATA")
     */
    protected $data;

    /**
     * Constructor.
     *
     * @param Customer $customer The customer data for the request.
     */
    public function __construct(Customer $customer)
    {
        parent::__construct();

        $this->data = $customer;
    }

    /**
     * {@inheritdoc}
     */
    public function getService()
    {
        return 'customer.create';
    }
}
