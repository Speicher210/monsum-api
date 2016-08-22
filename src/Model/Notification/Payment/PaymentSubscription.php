<?php

namespace Speicher210\Fastbill\Api\Model\Notification\Payment;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\Model\Notification\Subscription\SubscriptionTrait;

/**
 * Subscription in a payment notification model.
 */
class PaymentSubscription
{
    use SubscriptionTrait;
}
