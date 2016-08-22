<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\Cancel;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractRequestData;

/**
 * The request data for cancellation of a subscription.
 */
final class RequestData extends AbstractRequestData
{
    /**
     * The subscription ID.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("SUBSCRIPTION_ID")
     */
    protected $subscriptionId;

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
     * The reason for cancellation of a subscription.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CANCELLATION_NOTE")
     */
    protected $cancellationNote;

    /**
     * Constructor.
     *
     * @param integer $subscriptionId The subscription ID.
     */
    public function __construct($subscriptionId)
    {
        $this->setSubscriptionId($subscriptionId);
    }

    /**
     * Get the subscription ID.
     *
     * @return integer
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * Set the subscription ID.
     *
     * @param integer $subscriptionId The subscription ID.
     * @return RequestData
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;

        return $this;
    }

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
     * @return RequestData
     */
    public function setCancellationDate(\DateTime $cancellationDate = null)
    {
        $this->cancellationDate = $cancellationDate;

        return $this;
    }

    /**
     * Get the cancellation note.
     *
     * @return string
     */
    public function getCancellationNote()
    {
        return $this->cancellationNote;
    }

    /**
     * Set the cancellation note.
     *
     * @param string $cancellationNote The cancellation note.
     * @return RequestData
     */
    public function setCancellationNote($cancellationNote)
    {
        $this->cancellationNote = $cancellationNote;

        return $this;
    }
}
