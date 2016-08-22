<?php

namespace Speicher210\Fastbill\Test\Api\Model\Coupon;
use Speicher210\Fastbill\Api\Model\Subscription;

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
        return array(
            array(Subscription::SUBSCRIPTION_STATUS_ACTIVE, true),
            array(Subscription::SUBSCRIPTION_STATUS_INACTIVE, false),
            array(Subscription::SUBSCRIPTION_STATUS_TRIAL, true),
            array(Subscription::SUBSCRIPTION_STATUS_CANCELED, false),
            array(Subscription::SUBSCRIPTION_STATUS_CLOSED, false),
            array('bogus', false)
        );
    }

    /**
     * @dataProvider dataProviderTestSubscriptionRunning
     *
     * @param string $status The status.
     * @param boolean $expected The expected running status.
     */
    function testSubscriptionRunning($status, $expected)
    {
        $subscription = new Subscription();
        $subscription->setStatus($status);

        $this->assertSame($expected, $subscription->isRunning());
    }
}
