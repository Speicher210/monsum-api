<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\GetUpcomingAmount;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractResponse;

/**
 * Response when renewing a subscription.
 */
class Response extends AbstractResponse
{
    /**
     * The total of the upcoming amount.
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("TOTAL")
     */
    protected $total;

    /**
     * Get the total.
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set the total.
     *
     * @param float $total The total.
     * @return Response
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }
}
