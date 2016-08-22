<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\Renew;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractRequest;

/**
 * The request for renewing a subscription.
 */
class Request extends AbstractRequest
{
    /**
     * Request.
     *
     * @var RequestData
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Service\Subscription\Renew\RequestData")
     * @JMS\SerializedName("DATA")
     */
    protected $data;

    /**
     * Constructor.
     *
     * @param RequestData $requestData The data for the request.
     */
    public function __construct(RequestData $requestData)
    {
        parent::__construct();

        $this->data = $requestData;
    }

    /**
     * {@inheritdoc}
     */
    public function getService()
    {
        return 'subscription.renew';
    }
}
