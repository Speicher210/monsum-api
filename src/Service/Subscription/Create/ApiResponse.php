<?php

namespace Speicher210\Monsum\Api\Service\Subscription\Create;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Monsum\Api\AbstractApiResponse;

/**
 * API response when creating a subscription.
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
     * @JMS\Type("Speicher210\Monsum\Api\Service\Subscription\Create\Request")
     * @JMS\SerializedName("REQUEST")
     */
    protected $request;

    /**
     * The response.
     *
     * @var array
     *
     * @JMS\Type("Speicher210\Monsum\Api\Service\Subscription\Create\Response")
     * @JMS\SerializedName("RESPONSE")
     */
    protected $response;
}
