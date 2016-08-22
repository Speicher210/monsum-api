<?php

namespace Speicher210\Fastbill\Api\Service\Coupon\Get;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractResponse;

/**
 * Response when getting the coupons.
 */
class Response extends AbstractResponse
{
    /**
     * The coupons from the response.
     *
     * @var array
     *
     * @JMS\Type("array<Speicher210\Fastbill\Api\Model\Coupon>")
     * @JMS\SerializedName("COUPONS")
     */
    protected $coupons = array();

    /**
     * Get the coupons from the response.
     *
     * @return \Speicher210\Fastbill\Api\Model\Coupon[]
     */
    public function getCoupons()
    {
        return $this->coupons;
    }
}
