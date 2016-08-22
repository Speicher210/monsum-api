<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\Cancel;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractRequest;

/**
 * The request for cancellation of a subscription.
 */
class Request extends AbstractRequest
{
    /**
     * The request body.
     *
     * @var array
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Service\Subscription\Cancel\RequestData")
     * @JMS\SerializedName("DATA")
     */
    protected $data;

    /**
     * Constructor.
     *
     * @param RequestData $requestData The data for the request.
     */
    public function __construct(RequestData $requestData = null)
    {
        parent::__construct();
        $this->data = $requestData;
    }

    /**
     * {@inheritdoc}
     */
    public function getService()
    {
        return 'subscription.cancel';
    }
}
