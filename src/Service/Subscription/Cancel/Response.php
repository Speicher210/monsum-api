<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\Cancel;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractResponse;

/**
 * Response for cancellation of a subscription.
 */
class Response extends AbstractResponse
{
    /**
     *  The subscription cancellation date.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("cancellation_date")
     */
    protected $cancellationDate;

    /**
     * Get the cancellation date and time.
     *
     * @return \DateTime
     */
    public function getCancellationDate()
    {
        return $this->cancellationDate;
    }

    /**
     * Set the cancellation date and time.
     *
     * @param \DateTime $cancellationDate The cancellation date and time.
     * @return Response
     */
    public function setCancellationDate($cancellationDate)
    {
        $this->cancellationDate = $cancellationDate;

        return $this;
    }
}
