<?php

namespace Speicher210\Fastbill\Api\Service\Customer\CreateSecureLink;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractApiResponse;

/**
 * API response when creating secure links to account data and dashboard of the customer.
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
     * @JMS\Type("Speicher210\Fastbill\Api\Service\Customer\CreateSecureLink\Request")
     * @JMS\SerializedName("REQUEST")
     */
    protected $request;

    /**
     * The response.
     *
     * @var Response
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Service\Customer\CreateSecureLink\Response")
     * @JMS\SerializedName("RESPONSE")
     */
    protected $response;
}
