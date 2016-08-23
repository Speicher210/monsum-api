<?php

namespace Speicher210\Monsum\Api\Service\Subscription\Reactivate;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Monsum\Api\AbstractApiResponse;

/**
 * API response when reactivating a subscription.
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
     * @JMS\Type("Speicher210\Monsum\Api\Service\Subscription\Reactivate\Request")
     * @JMS\SerializedName("REQUEST")
     */
    protected $request;

    /**
     * The response.
     *
     * @var Response
     *
     * @JMS\Type("Speicher210\Monsum\Api\Service\Subscription\Reactivate\Response")
     * @JMS\SerializedName("RESPONSE")
     */
    protected $response;
}
