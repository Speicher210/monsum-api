<?php

namespace Speicher210\Fastbill\Api\Model\Notification\Subscription;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\Model\Notification\AbstractNotificationPayload;
use Speicher210\Fastbill\Api\Model\Notification\Customer\Customer;

/**
 * Abstract subscription notification payload model.
 */
abstract class AbstractSubscriptionNotificationPayload extends AbstractNotificationPayload implements SubscriptionNotificationPayloadInterface
{
    /**
     * The customer for the subscription notification.
     *
     * @var Customer
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Model\Notification\Customer\Customer")
     * @JMS\SerializedName("customer")
     */
    protected $customer;

    /**
     * The subscription for the subscription notification.
     *
     * @var Subscription
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Model\Notification\Subscription\Subscription")
     * @JMS\SerializedName("subscription")
     */
    protected $subscription;

    /**
     * The date and time when the subscription notification was created.
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
