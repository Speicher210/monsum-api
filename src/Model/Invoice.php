<?php

namespace Speicher210\Fastbill\Api\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Invoice model.
 */
class Invoice
{
    const INVOICE_TYPE_OUTGOING = 'outgoing';
    const INVOICE_TYPE_DRAFT = 'draft';
    const INVOICE_TYPE_CREDIT = 'credit';

    const INVOICE_SALUTATION_NONE = '';
    const INVOICE_SALUTATION_MR = 'mr';
    const INVOICE_SALUTATION_MRS = 'mrs';
    const INVOICE_SALUTATION_FAMILY = 'family';

    const INVOICE_PAYMENT_TYPE_TRANSFER = 1;
    const INVOICE_PAYMENT_TYPE_DIRECT_DEBIT = 2;
    const INVOICE_PAYMENT_TYPE_CASH = 3;
    const INVOICE_PAYMENT_TYPE_PAYPAL = 4;
    const INVOICE_PAYMENT_TYPE_ADVANCED_PAYMENT = 5;
    const INVOICE_PAYMENT_TYPE_CREDIT_CARD = 6;

    const INVOICE_STATUS_OVERDUE = 'overdue';
    const INVOICE_STATUS_PAID = 'paid';
    const INVOICE_STATUS_UNPAID = 'unpaid';

    /**
     * The invoice id.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("INVOICE_ID")
     */
    protected $invoiceId;

    /**
     * The invoice external id.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("INVOICE_EXT_UID")
     */
    protected $invoiceExternalId;

    /**
     * The status.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("STATUS")
     */
    protected $status;

    /**
     * The type.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TYPE")
     */
    protected $type;

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
     * The own customer number.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CUSTOMER_NUMBER")
     */
    protected $customerNumber;

    /**
     * The customer cost center ID.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("CUSTOMER_COSTCENTER_ID")
     */
    protected $customerCostCenterId;

    /**
     * The name of the organization.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ORGANIZATION")
     */
    protected $organization;

    /**
     * Salutation.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("SALUTATION")
     */
    protected $salutation;

    /**
     * The first name.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("FIRST_NAME")
     */
    protected $firstName;

    /**
     * The last name.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LAST_NAME")
     */
    protected $lastName;

    /**
     * The address.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ADDRESS")
     */
    protected $address;

    /**
     * The address2.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ADDRESS_2")
     */
    protected $address2;

    /**
     * The zip code.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ZIPCODE")
     */
    protected $zipCode;

    /**
     * The city.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CITY")
     */
    protected $city;

    /**
     * Some comments about the invoice.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("COMMENT")
     */
    protected $comment;

    /**
     * Payment type.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("PAYMENT_TYPE")
     */
    protected $paymentType;

    /**
     * Days until date of payment.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("DAYS_FOR_PAYMENT")
     */
    protected $paymentDays;

    /**
     * The bank name.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("BANK_NAME")
     */
    protected $bankName;

    /**
     * The bank account number.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("BANK_ACCOUNT_NUMBER")
     */
    protected $bankAccountNumber;

    /**
     * The bank code.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("BANK_CODE")
     */
    protected $bankCode;

    /**
     * The bank account owner.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("BANK_ACCOUNT_OWNER")
     */
    protected $bankAccountOwner;

    /**
     * The bank IBAN.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("BANK_IBAN")
     */
    protected $bankIBAN;

    /**
     * The bank BIC.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("BANK_BIC")
     */
    protected $bankBIC;

    /**
     * The invoice affiliate.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("AFFILIATE")
     */
    protected $affiliate;

    /**
     * The invoice country code (ISO 3166 ALPHA-2).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("COUNTRY_CODE")
     */
    protected $countryCode;

    /**
     * The VAT identification number of the invoice.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("VAT_ID")
     */
    protected $vatId;

    /**
     * The currency code of the invoice.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CURRENCY_CODE")
     */
    protected $currencyCode;

    /**
     * The template id.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("TEMPLATE_ID")
     */
    protected $templateId;

    /**
     * The subscription id.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("SUBSCRIPTION_ID")
     */
    protected $subscriptionId;

    /**
     * The subscription invoice counter.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("SUBSCRIPTION_INVOICE_COUNTER")
     */
    protected $subscriptionInvoiceCounter;

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
     * The intro text.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("INTROTEXT")
     */
    protected $introText;

    /**
     * The date of received payment.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("PAID_DATE")
     */
    protected $paidDate;

    /**
     * The outstanding amount.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("OUTSTANDING_AMOUNT")
     */
    protected $outstandingAmount;

    /**
     * The Flag for canceled status: 0 = no | 1 = yes.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("IS_CANCELED")
     */
    protected $isCanceled;

    /**
     * The invoice date.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\SerializedName("INVOICE_DATE")
     */
    protected $invoiceDate;

    /**
     * The due date.
     *
     * We serialize it as string because of inconsistencies in the Fastbill API response.
     * Depending on the customer, the due date may or may not have a time component in the response.
     *
     * @var \DateTime
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DUE_DATE")
     */
    protected $dueDate;

    /**
     * The delivery date.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DELIVERY_DATE")
     */
    protected $deliveryDate;

    /**
     * The cash discount percent.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CASH_DISCOUNT_PERCENT")
     */
    protected $cashDiscountPercent;

    /**
     * The cash discount days.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CASH_DISCOUNT_DAYS")
     */
    protected $cashDiscountDays;

    /**
     * The cash discount percent.
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("SUB_TOTAL")
     */
    protected $subTotal;

    /**
     * The cash discount percent.
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("VAT_TOTAL")
     */
    protected $vatTotal;

    /**
     * List of all articles for one entity.
     *
     * @var array
     *
     * @JMS\Type("array<Speicher210\Fastbill\Api\Model\InvoiceVatItem>")
     * @JMS\SerializedName("VAT_ITEMS")
     */
    protected $vatItems = array();

    /**
     * List of the items
     *
     * @var array
     *
     * @JMS\Type("array<Speicher210\Fastbill\Api\Model\InvoiceItem>")
     * @JMS\SerializedName("ITEMS")
     */
    protected $items = array();

    /**
     * The total.
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("TOTAL")
     */
    protected $total;

    /**
     * The payment info.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("PAYMENT_INFO")
     */
    protected $paymentInfo;

    /**
     * The document url.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DOCUMENT_URL")
     */
    protected $documentUrl;

    /**
     * List of shipment-events belonging to the invoice.
     *
     * @var array
     *
     * @JMS\Type("array")
     * @JMS\SerializedName("SHIPMENTS")
     */
    protected $shipments = array();

    /**
     * The PayPal url.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("PAYPAL_URL")
     */
    protected $payPalUrl;

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
     * @param int $invoiceId
     * @return Invoice
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;

        return $this;
    }

    /**
     * Get the invoice external ID.
     *
     * @return string
     */
    public function getInvoiceExternalId()
    {
        return $this->invoiceExternalId;
    }

    /**
     * Set the invoice external ID.
     *
     * @param string $invoiceExternalId
     * @return Invoice
     */
    public function setInvoiceExternalId($invoiceExternalId)
    {
        $this->invoiceExternalId = $invoiceExternalId;

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
     * @param string $status
     * @return Invoice
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the type of the invoice.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the type of the invoice.
     *
     * @param string $type
     * @return Invoice
     */
    public function setType($type)
    {
        $this->type = $type;

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
     * @return Invoice
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get the customer number.
     *
     * @return int
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     * Set the customer number.
     *
     * @param int $customerNumber
     * @return Invoice
     */
    public function setCustomerNumber($customerNumber)
    {
        $this->customerNumber = $customerNumber;

        return $this;
    }

    /**
     * Get the customer cost center ID.
     *
     * @return int
     */
    public function getCustomerCostCenterId()
    {
        return $this->customerCostCenterId;
    }

    /**
     * Set the customer cost center ID.
     *
     * @param int $customerCostCenterId
     * @return Invoice
     */
    public function setCustomerCostCenterId($customerCostCenterId)
    {
        $this->customerCostCenterId = $customerCostCenterId;

        return $this;
    }

    /**
     * Get the organization.
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Set the organization.
     *
     * @param string $organization
     * @return Invoice
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Get the salutation.
     *
     * @return string
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * Set the salutation.
     *
     * @param string $salutation
     * @return Invoice
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;

        return $this;
    }

    /**
     * Set the first name.
     *
     * @param string $firstName The name.
     * @return Invoice
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the last name.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the last name.
     *
     * @param string $lastName The last name.
     * @return Invoice
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the address.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the address.
     *
     * @param string $address The address.
     * @return Invoice
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the address 2.
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set the address 2.
     *
     * @param string $address2 The address.
     * @return Invoice
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get the zip code.
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set the zip code.
     *
     * @param string $zipCode The zip code.
     * @return Invoice
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get the city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the city.
     *
     * @param string $city The city.
     * @return Invoice
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the comment.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set the comment.
     *
     * @param string $comment
     * @return Invoice
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get the payment type.
     *
     * @return int
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set the payment type.
     *
     * @param int $paymentType
     * @return Invoice
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Get the payment days.
     *
     * @return int
     */
    public function getPaymentDays()
    {
        return $this->paymentDays;
    }

    /**
     * Set the payment days.
     *
     * @param int $paymentDays
     * @return Invoice
     */
    public function setPaymentDays($paymentDays)
    {
        $this->paymentDays = $paymentDays;

        return $this;
    }

    /**
     * Get the bank name.
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * Get the bank name.
     *
     * @param string $bankName The name of the back.
     * @return Invoice
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;

        return $this;
    }

    /**
     * Get the bank account number.
     *
     * @return string
     */
    public function getBankAccountNumber()
    {
        return $this->bankAccountNumber;
    }

    /**
     * Set the bank account number.
     *
     * @param string $bankAccountNumber
     * @return Invoice
     */
    public function setBankAccountNumber($bankAccountNumber)
    {
        $this->bankAccountNumber = $bankAccountNumber;

        return $this;
    }

    /**
     * Get the bank code.
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * Set the bank code.
     *
     * @param string $bankCode The code.
     * @return Invoice
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;

        return $this;
    }

    /**
     * Get the bank account owner.
     *
     * @return string
     */
    public function getBankAccountOwner()
    {
        return $this->bankAccountOwner;
    }

    /**
     * Set the bank account owner.
     *
     * @param string $bankAccountOwner The owner.
     * @return Invoice
     */
    public function setBankAccountOwner($bankAccountOwner)
    {
        $this->bankAccountOwner = $bankAccountOwner;

        return $this;
    }

    /**
     * Get the bank IBAN.
     *
     * @return string
     */
    public function getBankIBAN()
    {
        return $this->bankIBAN;
    }

    /**
     * Set the bank IBAN.
     *
     * @param string $bankIBAN The IBAN code.
     * @return Invoice
     */
    public function setBankIBAN($bankIBAN)
    {
        $this->bankIBAN = $bankIBAN;

        return $this;
    }

    /**
     * Get the bank BIC.
     *
     * @return string
     */
    public function getBankBIC()
    {
        return $this->bankBIC;
    }

    /**
     * Set the bank BIC.
     *
     * @param string $bankBIC The BIC.
     * @return Invoice
     */
    public function setBankBIC($bankBIC)
    {
        $this->bankBIC = $bankBIC;

        return $this;
    }

    /**
     * Get the affiliate.
     *
     * @return string
     */
    public function getAffiliate()
    {
        return $this->affiliate;
    }

    /**
     * Set the affiliate.
     *
     * @param string $affiliate
     * @return Invoice
     */
    public function setAffiliate($affiliate)
    {
        $this->affiliate = $affiliate;

        return $this;
    }

    /**
     * Get the country code.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set the country code (ISO 3166 ALPHA-2).
     *
     * @param string $countryCode
     * @return Invoice
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get the vat ID.
     *
     * @return string
     */
    public function getVatId()
    {
        return $this->vatId;
    }

    /**
     * Set the vat ID.
     *
     * @param string $vatId
     * @return Invoice
     */
    public function setVatId($vatId)
    {
        $this->vatId = $vatId;

        return $this;
    }

    /**
     * Get the currency code.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set the currency code.
     *
     * @param string $currencyCode
     * @return Invoice
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Get the template ID.
     *
     * @return int
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * Set the template ID.
     *
     * @param int $templateId
     * @return Invoice
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;

        return $this;
    }

    /**
     * Get the subscription ID.
     *
     * @return int
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * Set the subscription ID.
     *
     * @param int $subscriptionId
     * @return Invoice
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;

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
     * @param string $invoiceNumber
     * @return Invoice
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
     * @return Invoice
     */
    public function setInvoiceTitle($invoiceTitle)
    {
        $this->invoiceTitle = $invoiceTitle;

        return $this;
    }

    /**
     * Get the intro text.
     *
     * @return string
     */
    public function getIntroText()
    {
        return $this->introText;
    }

    /**
     * Set the intro text.
     *
     * @param string $introText
     * @return Invoice
     */
    public function setIntroText($introText)
    {
        $this->introText = $introText;

        return $this;
    }

    /**
     * Get paid date.
     *
     * @return \DateTime
     */
    public function getPaidDate()
    {
        return $this->paidDate;
    }

    /**
     * Set paid date.
     *
     * @param \DateTime $paidDate
     * @return Invoice
     */
    public function setPaidDate($paidDate)
    {
        $this->paidDate = $paidDate;

        return $this;
    }

    /**
     * Get if the invoice is canceled.
     *
     * @return int
     */
    public function getIsCanceled()
    {
        return $this->isCanceled;
    }

    /**
     * Set if the invoice is canceled.
     *
     * @param int $isCanceled
     * @return Invoice
     */
    public function setIsCanceled($isCanceled)
    {
        $this->isCanceled = $isCanceled;

        return $this;
    }

    /**
     * Get the invoice date.
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * Set the invoice date.
     *
     * @param \DateTime $invoiceDate
     * @return Invoice
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    /**
     * Get the due date.
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Set the due date.
     *
     * @param \DateTime $dueDate
     * @return Invoice
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get delivery date.
     *
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Set the delivery date.
     *
     * @param string $deliveryDate
     * @return Invoice
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * Get the cash discount percent.
     *
     * @return string
     */
    public function getCashDiscountPercent()
    {
        return $this->cashDiscountPercent;
    }

    /**
     * Set the cash discount percent.
     *
     * @param string $cashDiscountPercent
     * @return Invoice
     */
    public function setCashDiscountPercent($cashDiscountPercent)
    {
        $this->cashDiscountPercent = $cashDiscountPercent;

        return $this;
    }

    /**
     * Get the cash discount days.
     *
     * @return string
     */
    public function getCashDiscountDays()
    {
        return $this->cashDiscountDays;
    }

    /**
     * Set the cash discount days.
     *
     * @param string $cashDiscountDays
     * @return Invoice
     */
    public function setCashDiscountDays($cashDiscountDays)
    {
        $this->cashDiscountDays = $cashDiscountDays;

        return $this;
    }

    /**
     * Get the sub total.
     *
     * @return float
     */
    public function getSubTotal()
    {
        return $this->subTotal;
    }

    /**
     * Set the sub total.
     *
     * @param float $subTotal
     * @return Invoice
     */
    public function setSubTotal($subTotal)
    {
        $this->subTotal = $subTotal;

        return $this;
    }

    /**
     * Get the vat total.
     *
     * @return float
     */
    public function getVatTotal()
    {
        return $this->vatTotal;
    }

    /**
     * Set the vat total.
     *
     * @param float $vatTotal
     * @return Invoice
     */
    public function setVatTotal($vatTotal)
    {
        $this->vatTotal = $vatTotal;

        return $this;
    }

    /**
     * Get the vat items.
     *
     * @return array
     */
    public function getVatItems()
    {
        return $this->vatItems;
    }

    /**
     * Set the vat items.
     *
     * @param InvoiceVatItem[] $vatItems
     * @return Invoice
     */
    public function setVatItems(array $vatItems)
    {
        $this->vatItems = $vatItems;

        return $this;
    }

    /**
     * Add a vat item.
     *
     * @param InvoiceVatItem $vatItem The vat item to add.
     */
    public function addVatItem(InvoiceVatItem $vatItem)
    {
        $this->vatItems[] = $vatItem;
    }

    /**
     * Get the items.
     *
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set the items.
     *
     * @param InvoiceItem[] $items The items.
     * @return Invoice
     */
    public function setItems(array $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Add an item.
     *
     * @param InvoiceItem $item The item to add.
     */
    public function addItem(InvoiceItem $item)
    {
        $this->items[] = $item;
    }

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
     * @param float $total
     * @return Invoice
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get the payment info.
     *
     * @return string
     */
    public function getPaymentInfo()
    {
        return $this->paymentInfo;
    }

    /**
     * Set the payment info.
     *
     * @param string $paymentInfo
     * @return Invoice
     */
    public function setPaymentInfo($paymentInfo)
    {
        $this->paymentInfo = $paymentInfo;

        return $this;
    }

    /**
     * Get the document url.
     *
     * @return string
     */
    public function getDocumentUrl()
    {
        return $this->documentUrl;
    }

    /**
     * Set the document url.
     *
     * @param string $documentUrl
     * @return Invoice
     */
    public function setDocumentUrl($documentUrl)
    {
        $this->documentUrl = $documentUrl;

        return $this;
    }

    /**
     * Get the shipments.
     *
     * @return array
     */
    public function getShipments()
    {
        return $this->shipments;
    }

    /**
     * Set the shipments.
     *
     * @param array $shipments
     * @return Invoice
     */
    public function setShipments(array $shipments)
    {
        $this->shipments = $shipments;

        return $this;
    }

    /**
     * Get the PayPal url.
     *
     * @return string
     */
    public function getPayPalUrl()
    {
        return $this->payPalUrl;
    }

    /**
     * Set the PayPal url.
     *
     * @param string $payPalUrl The PayPal url.
     * @return Invoice
     */
    public function setPayPalUrl($payPalUrl)
    {
        $this->payPalUrl = $payPalUrl;

        return $this;
    }

    /**
     * Get the subscription invoice counter.
     *
     * @return int
     */
    public function getSubscriptionInvoiceCounter()
    {
        return $this->subscriptionInvoiceCounter;
    }

    /**
     * Set the subscription invoice counter.
     *
     * @param int $subscriptionInvoiceCounter
     * @return Invoice
     */
    public function setSubscriptionInvoiceCounter($subscriptionInvoiceCounter)
    {
        $this->subscriptionInvoiceCounter = $subscriptionInvoiceCounter;

        return $this;
    }

    /**
     * Get the outstanding amount.
     *
     * @return string
     */
    public function getOutstandingAmount()
    {
        return $this->outstandingAmount;
    }

    /**
     * Set the outstanding amount.
     *
     * @param string $outstandingAmount
     * @return Invoice
     */
    public function setOutstandingAmount($outstandingAmount)
    {
        $this->outstandingAmount = $outstandingAmount;

        return $this;
    }

    /**
     * @JMS\PreSerialize()
     */
    protected function preSerializer()
    {
        $this->dueDate = $this->dueDate->format('Y-m-d H:i:s');
    }
}
