<?php

namespace Speicher210\Fastbill\Api\Model\Notification\Customer;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\Model\Notification\AbstractNotificationPayload;

/**
 * Abstract customer notification payload model.
 */
abstract class AbstractCustomerNotificationPayload extends AbstractNotificationPayload implements CustomerNotificationPayloadInterface
{
    /**
     * The customer for the customer notification.
     *
     * @var Customer
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Model\Notification\Customer\Customer")
     * @JMS\SerializedName("customer")
     */
    protected $customer;

    /**
     * {@inheritdoc}
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }
}
