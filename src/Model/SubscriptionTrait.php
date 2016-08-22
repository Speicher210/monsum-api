<?php

namespace Speicher210\Fastbill\Api\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Trait for subscription data.
 */
trait SubscriptionTrait
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
     * The customer ID.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("CUSTOMER_ID")
     */
    protected $customerId;

    /**
     * The subscription title.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("SUBSCRIPTION_TITLE")
     */
    protected $subscriptionTitle;

    /**
     * The subscription start.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("START")
     */
    protected $subscriptionStart;

    /**
     * The subscription next event.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("NEXT_EVENT")
     */
    protected $nextEvent;

    /**
     * The subscription cancellation date.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("CANCELLATION_DATE")
     */
    protected $cancellationDate;

    /**
     * The subscription status.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("STATUS")
     */
    protected $status;

    /**
     * The subscription hash.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("HASH")
     */
    protected $hash;

    /**
     * The subscription X-Attribute.
     *
     * @var array
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("X_ATTRIBUTES")
     */
    protected $xAttributes = array();

    /**
     * The subscription article number.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ARTICLE_NUMBER")
     */
    protected $articleNumber;

    /**
     * The subscription quantity.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("QUANTITY")
     */
    protected $quantity;

    /**
     * @var SubscriptionPlanObject
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Model\SubscriptionPlanObject")
     * @JMS\SerializedName("PLAN")
     */
    protected $plan;

    /**
     * The external subscription ID.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("SUBSCRIPTION_EXT_UID")
     */
    protected $subscriptionExternalId;

    /**
     * The invoice title.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("INVOICE_TITLE")
     */
    protected $invoiceTitle;

    /**
     * The last event date and time.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("LAST_EVENT")
     */
    protected $lastEvent;

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
     * @var array
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("ADDONS")
     */
    protected $addons;

    /**
     * Date and time when the subscription expires.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("EXPIRATION_DATE")
     */
    protected $expirationDate;

    /**
     * @var SubscriptionPlanObject
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Model\SubscriptionPlanObject")
     * @JMS\SerializedName("PLAN_UPCOMING")
     */
    protected $planUpcoming;

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
     * @return $this
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * Get the customer ID.
     *
     * @return integer
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set the customer ID.
     *
     * @param integer $customerId The ID of the customer.
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get the external subscription ID.
     *
     * @return string
     */
    public function getSubscriptionExternalId()
    {
        return $this->subscriptionExternalId;
    }

    /**
     * Set the external subscription ID.
     *
     * @param string $subscriptionExternalId The external subscription ID.
     * @return $this
     */
    public function setSubscriptionExternalId($subscriptionExternalId)
    {
        $this->subscriptionExternalId = $subscriptionExternalId;

        return $this;
    }

    /**
     * Get the subscription title.
     *
     * @return string
     */
    public function getSubscriptionTitle()
    {
        return $this->subscriptionTitle;
    }

    /**
     * Set the subscription title.
     *
     * @param string $subscriptionTitle The title.
     * @return $this
     */
    public function setSubscriptionTitle($subscriptionTitle)
    {
        $this->subscriptionTitle = $subscriptionTitle;

        return $this;
    }

    /**
     * Get the subscription start.
     *
     * @return \DateTime
     */
    public function getSubscriptionStart()
    {
        return $this->subscriptionStart;
    }

    /**
     * Set the subscription start.
     *
     * @param \DateTime $subscriptionStart
     * @return $this
     */
    public function setSubscriptionStart($subscriptionStart)
    {
        $this->subscriptionStart = $subscriptionStart;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNextEvent()
    {
        return $this->nextEvent;
    }

    /**
     * @param \DateTime $nextEvent
     * @return $this
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
     * @return $this
     */
    public function setCancellationDate($cancellationDate)
    {
        $this->cancellationDate = $cancellationDate;

        return $this;
    }

    /**
     * Get the subscription status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the subscription status.
     *
     * @param string $status The subscription status.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the hash.
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set the hash.
     *
     * @param string $hash The hash.
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * @return array
     */
    public function getXAttributes()
    {
        return $this->xAttributes;
    }

    /**
     * @param array $xAttributes
     * @return $this
     */
    public function setXAttributes(array $xAttributes)
    {
        $this->xAttributes = $xAttributes;

        return $this;
    }

    /**
     * @return int
     */
    public function getArticleNumber()
    {
        return $this->articleNumber;
    }

    /**
     * Set the article number.
     *
     * @param string $articleNumber The article number.
     * @return $this
     */
    public function setArticleNumber($articleNumber)
    {
        $this->articleNumber = $articleNumber;

        return $this;
    }

    /**
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the quantity.
     *
     * @param integer $quantity The quantity.
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the plan.
     *
     * @return SubscriptionPlanObject
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Set the plan.
     *
     * @param SubscriptionPlanObject $plan The plan.
     * @return $this
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceTitle()
    {
        return $this->invoiceTitle;
    }

    /**
     * @param string $invoiceTitle
     * @return $this
     */
    public function setInvoiceTitle($invoiceTitle)
    {
        $this->invoiceTitle = $invoiceTitle;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastEvent()
    {
        return $this->lastEvent;
    }

    /**
     * @param mixed $lastEvent
     * @return $this
     */
    public function setLastEvent($lastEvent)
    {
        $this->lastEvent = $lastEvent;

        return $this;
    }

    /**
     * @return array
     */
    public function getAddons()
    {
        return $this->addons;
    }

    /**
     * @param array $addons
     * @return $this
     */
    public function setAddons($addons)
    {
        $this->addons = $addons;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param \DateTime $expirationDate
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * @return SubscriptionPlanObject
     */
    public function getPlanUpcoming()
    {
        return $this->planUpcoming;
    }

    /**
     * @param SubscriptionPlanObject $planUpcoming
     * @return $this
     */
    public function setPlanUpcoming($planUpcoming)
    {
        $this->planUpcoming = $planUpcoming;

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
     * @return $this
     */
    public function setCancellationNote($cancellationNote)
    {
        $this->cancellationNote = $cancellationNote;

        return $this;
    }
}
