<?php

namespace Speicher210\Monsum\Api\Service\Subscription\GetUpcomingAmount;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Monsum\Api\AbstractApiResponse;

/**
 * API response when getting the upcoming amount for.
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
     * @JMS\Type("Speicher210\Monsum\Api\Service\Subscription\GetUpcomingAmount\Request")
     * @JMS\SerializedName("REQUEST")
     */
    protected $request;

    /**
     * The response.
     *
     * @var Response
     *
     * @JMS\Type("Speicher210\Monsum\Api\Service\Subscription\GetUpcomingAmount\Response")
     * @JMS\SerializedName("RESPONSE")
     */
    protected $response;
}
