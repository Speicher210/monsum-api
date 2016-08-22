<?php

namespace Speicher210\Fastbill\Api\Model\Notification\Subscription;

use Speicher210\Fastbill\Api\Model\Notification\Customer\Customer;

/**
 * Interface for subscription notifications payload.
 */
interface SubscriptionNotificationPayloadInterface
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
     * @return SubscriptionNotificationPayloadInterface
     */
    public function setCustomer($customer);

    /**
     * Get the subscription.
     *
     * @return Subscription
     */
    public function getSubscription();

    /**
     * Set the subscription.
     *
     * @param Subscription $subscription
     * @return SubscriptionNotificationPayloadInterface
     */
    public function setSubscription($subscription);

    /**
     * Get the creation date and time.
     *
     * @return \DateTime
     */
    public function getCreated();

    /**
     * Set the creation date and time.
     *
     * @param \DateTime $created The creation date and time.
     * @return SubscriptionNotificationPayloadInterface
     */
    public function setCreated($created);
}
