<?php

namespace Speicher210\Fastbill\Api\Service\Invoice\Get;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractRequest;
use Speicher210\Fastbill\Api\GetRequestTrait;

/**
 * The request for getting the an invoice.
 */
class Request extends AbstractRequest
{
    use GetRequestTrait;

    /**
     * The request body.
     *
     * @var array
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Service\Invoice\Get\RequestData")
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
        return 'invoice.get';
    }
}
