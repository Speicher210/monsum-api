<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\DeleteUsageData;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractRequestData;

/**
 * The request data for deleting usage data for a subscription.
 */
final class RequestData extends AbstractRequestData
{
    /**
     * The usage data ID.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("USAGEDATA_ID")
     */
    protected $usageDataId;

    /**
     * Constructor.
     *
     * @param string $usageDataId The usage data ID.
     */
    public function __construct($usageDataId)
    {
        $this->setUsageDataId($usageDataId);
    }

    /**
     * Get the usage data ID.
     *
     * @return string
     */
    public function getUsageDataId()
    {
        return $this->usageDataId;
    }

    /**
     * Set the usage data ID.
     *
     * @param string $usageDataId The usage data ID.
     * @return RequestData
     */
    public function setUsageDataId($usageDataId)
    {
        $this->usageDataId = $usageDataId;

        return $this;
    }
}
