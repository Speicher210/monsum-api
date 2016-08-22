<?php

namespace Speicher210\Fastbill\Api\Model\Notification\Payment;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\Model\Notification\AbstractNotificationPayload;
use Speicher210\Fastbill\Api\Model\Notification\Customer\Customer;

/**
 * Abstract payment notification payload model.
 */
abstract class AbstractPaymentNotificationPayload extends AbstractNotificationPayload implements PaymentNotificationPayloadInterface
{
    /**
     * The customer for the payment notification.
     *
     * @var Customer
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Model\Notification\Customer\Customer")
     * @JMS\SerializedName("customer")
     */
    protected $customer;

    /**
     * The subscription for the payment notification.
     *
     * @var PaymentSubscription
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Model\Notification\Payment\PaymentSubscription")
     * @JMS\SerializedName("subscription")
     */
    protected $subscription;

    /**
     * The payment for the payment notification.
     *
     * @var Payment
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Model\Notification\Payment\Payment")
     * @JMS\SerializedName("payment")
     */
    protected $payment;

    /**
     * The date and time when the payment notification was created.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("created")
     */
    protected $created;

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

    /**
     * {@inheritdoc}
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * {@inheritdoc}
     */
    public function setSubscription($subscription)
    {
        $this->subscription = $subscription;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * {@inheritdoc}
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }
}
