<?php

namespace Speicher210\Fastbill\Api\Service\Coupon\Check;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractApiResponse;

/**
 * API response when checking a coupon.
 *
 * @method Response getResponse()
 */
class ApiResponse extends AbstractApiResponse
{
    /**
     * @var Request
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Service\Coupon\Check\Request")
     * @JMS\SerializedName("REQUEST")
     */
    protected $request;

    /**
     * The response.
     *
     * @var array
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Service\Coupon\Check\Response")
     * @JMS\SerializedName("RESPONSE")
     */
    protected $response;
}
