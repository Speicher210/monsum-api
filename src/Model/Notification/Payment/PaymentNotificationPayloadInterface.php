<?php

namespace Speicher210\Fastbill\Api\Model\Notification\Payment;

use Speicher210\Fastbill\Api\Model\Notification\Customer\Customer;

/**
 * Interface for payment notifications payload.
 */
interface PaymentNotificationPayloadInterface
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
     * @return PaymentNotificationPayloadInterface
     */
    public function setCustomer($customer);

    /**
     * Get the subscription.
     *
     * @return PaymentSubscription
     */
    public function getSubscription();

    /**
     * Set the subscription.
     *
     * @param PaymentSubscription $subscription The subscription.
     * @return PaymentNotificationPayloadInterface
     */
    public function setSubscription($subscription);

    /**
     * Get the payment.
     *
     * @return Payment
     */
    public function getPayment();

    /**
     * Set the payment.
     *
     * @param Payment $payment The payment.
     * @return PaymentNotificationPayloadInterface
     */
    public function setPayment($payment);

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
     * @return PaymentNotificationPayloadInterface
     */
    public function setCreated($created);
}
