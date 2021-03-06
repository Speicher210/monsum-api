<?php

namespace Speicher210\Monsum\Api\Service\Coupon\Get;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Monsum\Api\AbstractRequest;
use Speicher210\Monsum\Api\GetRequestTrait;

/**
 * The request for getting the coupons.
 */
class Request extends AbstractRequest
{
    use GetRequestTrait;

    /**
     * The request body.
     *
     * @var array
     *
     * @JMS\Type("Speicher210\Monsum\Api\Service\Coupon\Get\RequestData")
     * @JMS\SerializedName("FILTER")
     */
    protected $filter;

    /**
     * Constructor.
     *
     * @param RequestData $requestData The data for the request.
     */
    public function __construct(RequestData $requestData = null)
    {
        parent::__construct();
        $this->filter = $requestData;
    }

    /**
     * {@inheritdoc}
     */
    public function getService()
    {
        return 'coupon.get';
    }
}
