<?php

namespace Speicher210\Monsum\Api\Service\Subscription\SetAddon;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Monsum\Api\AbstractApiResponse;

/**
 * API response when setting addon for a subscription.
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
     * @JMS\Type("Speicher210\Monsum\Api\Service\Subscription\SetAddon\Request")
     * @JMS\SerializedName("REQUEST")
     */
    protected $request;

    /**
     * The response.
     *
     * @var array
     *
     * @JMS\Type("Speicher210\Monsum\Api\Service\Subscription\SetAddon\Response")
     * @JMS\SerializedName("RESPONSE")
     */
    protected $response;
}
