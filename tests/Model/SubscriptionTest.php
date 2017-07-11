<?php

namespace Speicher210\Monsum\Test\Api\Model\Coupon;

use Speicher210\Monsum\Api\Model\Subscription;

/**
 * Test for the subscription model.
 */
class SubscriptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Data provider for testSubscriptionRunning.
     *
     * @return array
     */
    public static function dataProviderTestSubscriptionRunning()
    {
        return [
            [Subscription::SUBSCRIPTION_STATUS_ACTIVE, true],
            [Subscription::SUBSCRIPTION_STATUS_INACTIVE, false],
            [Subscription::SUBSCRIPTION_STATUS_TRIAL, true],
            [Subscription::SUBSCRIPTION_STATUS_CANCELED, false],
            [Subscription::SUBSCRIPTION_STATUS_CLOSED, false],
            ['bogus', false]
        ];
    }

    /**
     * @dataProvider dataProviderTestSubscriptionRunning
     *
     * @param string $status The status.
     * @param boolean $expected The expected running status.
     */
    public function testSubscriptionRunning($status, $expected)
    {
        $subscription = new Subscription();
        $subscription->setStatus($status);

        static::assertSame($expected, $subscription->isRunning());
    }
}
