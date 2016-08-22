<?php

namespace Speicher210\Fastbill\Api\Model\Notification\Subscription;

use JMS\Serializer\Annotation as JMS;

/**
 * Subscription in a notification model.
 */
class Subscription
{
    use SubscriptionTrait;

    /**
     * The subscription start date.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("start_date")
     */
    protected $startDate;

    /**
     *  The subscription last event date.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("last_event")
     */
    protected $lastEvent;

    /**
     *  The subscription next event date.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("next_event")
     */
    protected $nextEvent;

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
     * The subscription status.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("status")
     */
    protected $status;

    /**
     * The subscription expiration date.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("expiration_date")
     */
    protected $expirationDate;

    /**
     * Get the start date and time.
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set the start date and time.
     *
     * @param \DateTime $startDate The start date and time.
     * @return Subscription
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get the last event date and time.
     *
     * @return \DateTime
     */
    public function getLastEvent()
    {
        return $this->lastEvent;
    }

    /**
     * Set the last event date and time.
     *
     * @param \DateTime $lastEvent The last event date and time.
     * @return Subscription
     */
    public function setLastEvent($lastEvent)
    {
        $this->lastEvent = $lastEvent;

        return $this;
    }

    /**
     * Get the next event date and time.
     *
     * @return \DateTime
     */
    public function getNextEvent()
    {
        return $this->nextEvent;
    }

    /**
     * Set the next event date and time.
     *
     * @param \DateTime $nextEvent The next event date and time.
     * @return Subscription
     */
    public function setNextEvent($nextEvent)
    {
        $this->nextEvent = $nextEvent;

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
     * @return Subscription
     */
    public function setCancellationDate($cancellationDate)
    {
        $this->cancellationDate = $cancellationDate;

        return $this;
    }

    /**
     * Get the status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the status.
     *
     * @param string $status The status.
     * @return Subscription
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the expiration date and time.
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Set the expiration date and time.
     *
     * @param \DateTime $expirationDate The expiration date and time.
     * @return Subscription
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }
}
