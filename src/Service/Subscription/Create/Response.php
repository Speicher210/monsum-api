<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\Create;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractResponse;

/**
 * Response when creating the subscriptions.
 */
class Response extends AbstractResponse
{
    /**
     * The created subscription id.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("SUBSCRIPTION_ID")
     */
    protected $subscriptionId;

    /**
     * The created subscription hash.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("HASH")
     */
    protected $hash;

    /**
     * The created subscription invoice id.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("INVOICE_ID")
     */
    protected $invoiceId;

    /**
     * The created subscription PayPal url.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("PAYPAL_URL")
     */
    protected $payPalUrl;

    /**
     * @return int
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * @param int $subscriptionId
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param string $hash
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
    }

    /**
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * @param integer $invoiceId
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;
    }

    /**
     * @return string
     */
    public function getPayPalUrl()
    {
        return $this->payPalUrl;
    }

    /**
     * @param string $payPalUrl
     */
    public function setPayPalUrl($payPalUrl)
    {
        $this->payPalUrl = $payPalUrl;
    }
}
