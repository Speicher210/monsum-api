<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\Update;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractApiResponse;

/**
 * API response when updating a subscription.
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
     * @JMS\Type("Speicher210\Fastbill\Api\Service\Subscription\Update\Request")
     * @JMS\SerializedName("REQUEST")
     */
    protected $request;

    /**
     * The response.
     *
     * @var array
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Service\Subscription\Update\Response")
     * @JMS\SerializedName("RESPONSE")
     */
    protected $response;
}
