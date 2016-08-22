<?php

namespace Speicher210\Fastbill\Api\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Subscription model.
 */
class Subscription
{
    use SubscriptionTrait;

    const SUBSCRIPTION_STATUS_ACTIVE = 'active';

    /**
     * Inactive subscription, usually after a payment failed.
     */
    const SUBSCRIPTION_STATUS_INACTIVE = 'inactive';

    /**
     * While in the trial period.
     */
    const SUBSCRIPTION_STATUS_TRIAL = 'trial';

    /**
     * If it has reached the cancellation date.
     */
    const SUBSCRIPTION_STATUS_CANCELED = 'canceled';

    /**
     * If the subscription is closed.
     */
    const SUBSCRIPTION_STATUS_CLOSED = 'closed';

    /**
     * The coupon applied to the subscription.
     *
     * @var Coupon
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Model\Coupon")
     * @JMS\SerializedName("COUPON")
     */
    protected $coupon;

    /**
     * Get the coupon for the subscription.
     *
     * @return Coupon
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * Set the coupon.
     *
     * @param Coupon $coupon The coupon to set.
     */
    public function setCoupon(Coupon $coupon)
    {
        $this->coupon = $coupon;
    }
    
    /**
     * Check if the current subscription is running.
     *
     * @return boolean
     */
    public function isRunning()
    {
        $runningStatuses = array(
            self::SUBSCRIPTION_STATUS_ACTIVE,
            self::SUBSCRIPTION_STATUS_TRIAL,
        );

        return in_array($this->getStatus(), $runningStatuses);
    }
}
