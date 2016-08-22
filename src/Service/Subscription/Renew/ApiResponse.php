<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\Renew;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractApiResponse;

/**
 * API response when renewing a subscription.
 *
 * @method Response getResponse()
 */
class ApiResponse extends AbstractApiResponse
{
    /**
     * The request.
     *
     * @var Request
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Service\Subscription\Renew\Request")
     * @JMS\SerializedName("REQUEST")
     */
    protected $request;

    /**
     * The response.
     *
     * @var Response
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Service\Subscription\Renew\Response")
     * @JMS\SerializedName("RESPONSE")
     */
    protected $response;
}
