<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\SetUsageData;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractResponse;

/**
 * Response when setting usage data for a subscription.
 */
class Response extends AbstractResponse
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
     * @return Response
     */
    public function setUsageDataId($usageDataId)
    {
        $this->usageDataId = $usageDataId;

        return $this;
    }
}
