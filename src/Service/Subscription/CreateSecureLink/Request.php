<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\CreateSecureLink;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractRequest;

/**
 * The request for creating secure links for a subscription.
 */
class Request extends AbstractRequest
{
    /**
     * Request.
     *
     * @var RequestData
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Service\Subscription\CreateSecureLink\RequestData")
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
        return 'subscription.createsecurelink';
    }
}
