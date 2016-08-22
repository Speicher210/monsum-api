<?php

namespace Speicher210\Fastbill\Api\Service\Invoice\Get;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractRequestData;

/**
 * The request data for getting the invoice.
 */
final class RequestData extends AbstractRequestData
{
    /**
     * The invoice ID.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("INVOICE_ID")
     */
    protected $invoiceId;

    /**
     * The invoice number.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("INVOICE_NUMBER")
     */
    protected $invoiceNumber;

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
     * The customer ID.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("CUSTOMER_ID")
     */
    protected $customerId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("MONTH")
     */
    protected $month;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("YEAR")
     */
    protected $year;

    /**
     * The invoice start date and time.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("START_DUE_DATE")
     */
    protected $startDate;

    /**
     * The invoice end date and time.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("END_DUE_DATE")
     */
    protected $endDate;

    /**
     * The invoice type.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TYPE")
     */
    protected $type;

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
     * @param integer $invoiceId The invoice ID.
     * @return RequestData
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
     * @return RequestData
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    /**
     * Get the invoice title.
     *
     * @return string
     */
    public function getInvoiceTitle()
    {
        return $this->invoiceTitle;
    }

    /**
     * Set the invoice title.
     *
     * @param string $invoiceTitle
     * @return RequestData
     */
    public function setInvoiceTitle($invoiceTitle)
    {
        $this->invoiceTitle = $invoiceTitle;

        return $this;
    }

    /**
     * Get the customer ID.
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set the customer ID.
     *
     * @param int $customerId
     * @return RequestData
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get the month.
     *
     * @return string
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Set the month.
     *
     * @param string $month
     * @return RequestData
     */
    public function setMonth($month)
    {
        $this->month = $month;

        return $this;
    }

    /**
     * Get the year.
     *
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the year.
     *
     * @param string $year
     * @return RequestData
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get the start date.
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set the start date.
     *
     * @param \DateTime $startDate
     * @return RequestData
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get the end date.
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set the end date.
     *
     * @param \DateTime $endDate
     * @return RequestData
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

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
     * @param string $type
     * @return RequestData
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
