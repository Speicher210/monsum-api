<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\Create;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractRequestData;
use Speicher210\Fastbill\Api\Model\SubscriptionTrait;

/**
 * The request data for creating a subscription.
 */
final class RequestData extends AbstractRequestData
{
    use SubscriptionTrait;

    /**
     * The coupon.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("COUPON")
     */
    protected $coupon;

    /**
     * Constructor.
     *
     * @param string $articleNumber The article number.
     * @param integer $customerId The customer ID.
     */
    public function __construct($articleNumber, $customerId)
    {
        $this->setArticleNumber($articleNumber);
        $this->setCustomerId($customerId);
    }

    /**
     * Get the coupon.
     *
     * @return string
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * Set the coupon.
     *
     * @param string $coupon The coupon.
     * @return RequestData
     */
    public function setCoupon($coupon)
    {
        $this->coupon = $coupon;

        return $this;
    }
}
