<?php

namespace Speicher210\Monsum\Api\Service\Customer\AddCredits;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Monsum\Api\AbstractRequest;

/**
 * The request for adding credits the customers.
 */
class Request extends AbstractRequest
{
    /**
     * @var RequestData
     *
     * @JMS\Type("Speicher210\Monsum\Api\Service\Customer\AddCredits\RequestData")
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
        return 'customer.addcredits';
    }
}
