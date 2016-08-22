<?php

namespace Speicher210\Fastbill\Api\Model\Notification\Customer;

/**
 * Interface for customer notifications payload.
 */
interface CustomerNotificationPayloadInterface
{

    /**
     * Get the customer.
     *
     * @return Customer
     */
    public function getCustomer();

    /**
     * Set the customer.
     *
     * @param Customer $customer The customer.
     * @return CustomerNotificationPayloadInterface
     */
    public function setCustomer($customer);
}
