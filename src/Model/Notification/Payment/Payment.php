<?php

namespace Speicher210\Fastbill\Api\Model\Notification\Payment;

use JMS\Serializer\Annotation as JMS;

/**
 * Payment in a notification model.
 */
class Payment
{
    const PAYMENT_STATUS_OPEN = 'open';

    const PAYMENT_STATUS_ERROR = 'error';

    /**
     * The payment ID.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("payment_id")
     */
    protected $paymentId;

    /**
     * The invoice ID.
     *
     * @var integer
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("invoice_id")
     */
    protected $invoiceId;

    /**
     * The invoice number.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("invoice_number")
     */
    protected $invoiceNumber;

    /**
     * The invoice URL.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("invoice_url")
     */
    protected $invoiceUrl;

    /**
     * The total amount.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("total_amount")
     */
    protected $totalAmount;

    /**
     * The payment currency.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("currency")
     */
    protected $currency;

    /**
     * The payment method.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("method")
     */
    protected $method;

    /**
     * The payment gateway.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("gateway")
     */
    protected $gateway;

    /**
     * The payment reference.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("reference")
     */
    protected $reference;

    /**
     * The flag if payment is test.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("test")
     */
    protected $test;

    /**
     * The type of the payment.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    protected $type;

    /**
     * The status of the payment.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("status")
     */
    protected $status;

    /**
     *  The payment next event date and time.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("next_event")
     */
    protected $nextEvent;

    /**
     * The date and time when the payment was created.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("created")
     */
    protected $created;

    /**
     * Get the payment ID.
     *
     * @return int
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * Set the payment ID.
     *
     * @param int $paymentId The payment ID.
     * @return Payment
     */
    public function setPaymentId($paymentId)
    {
        $this->paymentId = $paymentId;

        return $this;
    }

    /**
     * Get the invoice ID.
     *
     * @return int
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * Set the invoice ID.
     *
     * @param int $invoiceId The invoice ID.
     * @return Payment
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;

        return $this;
    }

    /**
     * Get the invoice number.
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * Set the invoice number.
     *
     * @param string $invoiceNumber The invoice number.
     * @return Payment
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    /**
     * Get the invoice URL.
     *
     * @return string
     */
    public function getInvoiceUrl()
    {
        return $this->invoiceUrl;
    }

    /**
     * Set the invoice URL.
     *
     * @param string $invoiceUrl The invoice URL.
     * @return Payment
     */
    public function setInvoiceUrl($invoiceUrl)
    {
        $this->invoiceUrl = $invoiceUrl;

        return $this;
    }

    /**
     * Get the total amount.
     *
     * @return string
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Set the total amount.
     *
     * @param string $totalAmount The total amount.
     * @return Payment
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * Get the currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set the currency.
     *
     * @param string $currency The currency.
     * @return Payment
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get the method.
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set the method.
     *
     * @param string $method The method.
     * @return Payment
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get the gateway.
     *
     * @return string
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * Set the gateway.
     *
     * @param string $gateway The gateway.
     * @return Payment
     */
    public function setGateway($gateway)
    {
        $this->gateway = $gateway;

        return $this;
    }

    /**
     * Get the reference.
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set the reference.
     *
     * @param string $reference The reference.
     * @return Payment
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get the test.
     *
     * @return string
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Set the test.
     *
     * @param string $test The test.
     * @return Payment
     */
    public function setTest($test)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * Get the type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return Payment
     */
    public function setType($type)
    {
        $this->type = $type;

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
     * @return Payment
     */
    public function setStatus($status)
    {
        $this->status = $status;

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
     * @return Payment
     */
    public function setNextEvent($nextEvent)
    {
        $this->nextEvent = $nextEvent;

        return $this;
    }

    /**
     * Get the creation date and time.
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set the creation date and time.
     *
     * @param \DateTime $created The creation date and time.
     * @return Payment
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }
}
