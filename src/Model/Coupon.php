<?php

namespace Speicher210\Fastbill\Api\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Coupon model.
 */
class Coupon
{
    use CouponTrait;

    const DISCOUNT_TYPE_FIXED = 'fixed';
    const DISCOUNT_TYPE_PERCENT = 'percent';

    const DISCOUNT_PERIOD_UNIT_EVENT = 'event';
    const DISCOUNT_PERIOD_UNIT_DAY = 'day';
    const DISCOUNT_PERIOD_UNIT_WEEK = 'week';
    const DISCOUNT_PERIOD_UNIT_MONTH = 'month';
    const DISCOUNT_PERIOD_UNIT_YEAR = 'year';

    const COUPON_STATE_PREMATURE = 'PREMATURE';
    const COUPON_STATE_USED = 'USED';
    const COUPON_STATE_UNUSED = 'UNUSED';
}
