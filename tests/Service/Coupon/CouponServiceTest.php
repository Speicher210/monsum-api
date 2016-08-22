<?php

namespace Speicher210\Fastbill\Test\Api\Service\Coupon;

use Speicher210\Fastbill\Api\Exception\ApiResponseException;
use Speicher210\Fastbill\Api\Model\Coupon;
use Speicher210\Fastbill\Api\Service\Coupon\Check\ApiResponse as CheckApiResponse;
use Speicher210\Fastbill\Api\Service\Coupon\Check\Response as CheckResponse;
use Speicher210\Fastbill\Api\Service\Coupon\CouponService;
use Speicher210\Fastbill\Api\Service\Coupon\Get\ApiResponse as GetApiResponse;
use Speicher210\Fastbill\Api\Service\Coupon\Get\Response as GetResponse;
use Speicher210\Fastbill\Test\Api\Service\AbstractServiceTest;

/**
 * Test for the coupon service.
 */
class CouponServiceTest extends AbstractServiceTest
{

    public function testGetCoupons()
    {
        /** @var CouponService $couponService */
        $couponService = $this->getServiceToTest();

        $apiResponse = $couponService->getCoupons('424258989');

        $this->assertInstanceOf(GetApiResponse::class, $apiResponse);
        /** @var GetResponse $response */
        $response = $apiResponse->getResponse();

        $expectedCoupon1 = new Coupon();
        $expectedCoupon1
            ->setCode('424258989')
            ->setTitle('6 Monate Rabattcode')
            ->setDiscount('100,00%')
            ->setDiscountAmount(100.0)
            ->setDiscountType(Coupon::DISCOUNT_TYPE_PERCENT)
            ->setDiscountPeriod('100 event')
            ->setDiscountPeriodAmount(100)
            ->setDiscountPeriodUnit(Coupon::DISCOUNT_PERIOD_UNIT_EVENT)
            ->setUsagesMax(0)
            ->setUsages(2)
            ->setCampaign('sprint-summer-autumn-winter campaign')
            ->setAssignedArticles(array(11, 666))
            ->setValidFrom(new \DateTime('2015-10-21 00:00:00'))
            ->setValidTo(new \DateTime('2015-11-29 00:00:00'))
            ->setState(Coupon::COUPON_STATE_USED);
        $expectedCoupon2 = new Coupon();
        $expectedCoupon2
            ->setCode('test')
            ->setTitle('1 Monat Rabattcode')
            ->setDiscount('1,00 €')
            ->setDiscountAmount(1.0)
            ->setDiscountType(Coupon::DISCOUNT_TYPE_FIXED)
            ->setDiscountPeriod('1 event')
            ->setDiscountPeriodUnit(Coupon::DISCOUNT_PERIOD_UNIT_EVENT)
            ->setDiscountPeriodAmount(1)
            ->setUsages(0)
            ->setUsagesMax(0)
            ->setState(Coupon::COUPON_STATE_UNUSED);

        $this->assertEquals(array($expectedCoupon1, $expectedCoupon2), $response->getCoupons());
    }

    public function testCheckCoupon()
    {
        /** @var CouponService $couponService */
        $couponService = $this->getServiceToTest();

        $apiResponse = $couponService->checkCoupon('424258989', 'ART_123');

        $this->assertInstanceOf(CheckApiResponse::class, $apiResponse);
        /** @var CheckResponse $response */
        $response = $apiResponse->getResponse();

        $expectedCheckResponse = new CheckResponse();
        $expectedCheckResponse->setStatus(CheckResponse::STATUS_INVALID);
        $this->assertEquals($expectedCheckResponse, $response);
    }

    public function testIsCouponValidForValidCoupon()
    {
        /** @var CouponService $couponService */
        $couponService = $this->getServiceToTest();

        $this->assertTrue($couponService->isCouponValid('COUPON_VALID', 'ART_123'));
    }

    public function testIsCouponValidForInvalidCoupon()
    {
        /** @var CouponService $couponService */
        $couponService = $this->getServiceToTest();

        $this->assertFalse($couponService->isCouponValid('COUPON_INVALID', 'ART_123'));
    }

    public function testCheckCouponThrowsExceptionIfCodeIsValidAndArticleIsNotValid()
    {
        /** @var CouponService $couponService */
        $couponService = $this->getServiceToTest();

        $this->setExpectedException(ApiResponseException::class, 'Error calling "coupon.check"');
        $couponService->checkCoupon('424258989', 'MISSING_ARTICLE');
    }

    /**
     * {@inheritdoc}
     */
    protected function getClassUnderTest()
    {
        return CouponService::class;
    }
}
