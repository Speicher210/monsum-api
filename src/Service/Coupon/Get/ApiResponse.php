<?php

namespace Speicher210\Fastbill\Api\Service\Coupon\Get;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractApiResponse;

/**
 * API response when getting coupons.
 *
 * @method Response getResponse()
 */
class ApiResponse extends AbstractApiResponse
{
    /**
     * @var Request
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Service\Coupon\Get\Request")
     * @JMS\SerializedName("REQUEST")
     */
    protected $request;

    /**
     * The response.
     *
     * @var array
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Service\Coupon\Get\Response")
     * @JMS\SerializedName("RESPONSE")
     */
    protected $response;
}
