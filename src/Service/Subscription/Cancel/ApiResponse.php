<?php

namespace Speicher210\Monsum\Api\Service\Subscription\Cancel;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Monsum\Api\AbstractApiResponse;

/**
 * API response for cancellation of a subscription.
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
     * @JMS\Type("Speicher210\Monsum\Api\Service\Subscription\Cancel\Request")
     * @JMS\SerializedName("REQUEST")
     */
    protected $request;

    /**
     * The response.
     *
     * @var array
     *
     * @JMS\Type("Speicher210\Monsum\Api\Service\Subscription\Cancel\Response")
     * @JMS\SerializedName("RESPONSE")
     */
    protected $response;
}
