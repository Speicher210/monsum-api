<?php

namespace Speicher210\Fastbill\Api\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Trait for customer data.
 */
trait CustomerTrait
{
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
     * The external customer ID.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CUSTOMER_EXT_UID")
     */
    protected $customerExternalUid;

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
     * Days until date of payment.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("DAYS_FOR_PAYMENT")
     */
    protected $daysForPayment;

    /**
     * Date of creation.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("CREATED")
     */
    protected $created;

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
     * The bank account owner address.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("BANK_ACCOUNT_OWNER_ADDRESS")
     */
    protected $bankAccountOwnerAddress;

    /**
     * The bank account owner city.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("BANK_ACCOUNT_OWNER_CITY")
     */
    protected $bankAccountOwnerCity;

    /**
     * The bank account owner zip code.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("BANK_ACCOUNT_OWNER_ZIPCODE")
     */
    protected $bankAccountOwnerZipCode;

    /**
     * The bank account owner email.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("BANK_ACCOUNT_OWNER_EMAIL")
     */
    protected $bankAccountOwnerEmail;

    /**
     * The bank account mandate reference number.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("BANK_ACCOUNT_MANDATE_REFERENCE")
     */
    protected $bankAccountMandateReference;

    /**
     * Show payment notice.
     *
     * @var boolean
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("SHOW_PAYMENT_NOTICE")
     */
    protected $showPaymentNotice;

    /**
     * The customer type.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CUSTOMER_TYPE")
     */
    protected $customerType;

    /**
     * Newsletter option: 0 = no | 1 = yes.
     *
     * @var boolean
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("NEWSLETTER_OPTIN")
     */
    protected $newsletterOptIn;

    /**
     * Affiliate.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("AFFILIATE")
     */
    protected $affiliate;

    /**
     * Hash.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("HASH")
     */
    protected $hash;

    /**
     * The bank account mandate reference date.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("BANK_ACCOUNT_MANDATE_REFERENCE_DATE")
     */
    protected $bankAccountMandateReferenceDate;

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
     * Academic title.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TITLE_ACADEMIC")
     */
    protected $titleAcademic;

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
     * The first name of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("FIRST_NAME")
     */
    protected $firstName;

    /**
     * The last name of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LAST_NAME")
     */
    protected $lastName;

    /**
     * The address of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ADDRESS")
     */
    protected $address;

    /**
     * The address  of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ADDRESS_2")
     */
    protected $address2;

    /**
     * The zipcode of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ZIPCODE")
     */
    protected $zipCode;

    /**
     * The city of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CITY")
     */
    protected $city;

    /**
     * The customer country code (ISO 3166 ALPHA-2).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("COUNTRY_CODE")
     */
    protected $countryCode;

    /**
     * The secondary address of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("SECONDARY_ADDRESS")
     */
    protected $secondaryAddress;

    /**
     * The state of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("STATE")
     */
    protected $state;

    /**
     * The phone number of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("PHONE")
     */
    protected $phone;

    /**
     * The fax number of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("FAX")
     */
    protected $fax;

    /**
     * The email address.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("EMAIL")
     */
    protected $email;

    /**
     * The email address cc.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("EMAIL_CC")
     */
    protected $emailCC;

    /**
     * The birthday of the customer.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\SerializedName("BIRTHDAY")
     */
    protected $birthday;

    /**
     * The payment mail address of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("PAYMENT_MAIL_ADDRESS")
     */
    protected $paymentMailAddress;

    /**
     * The VAT identification number of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("VAT_ID")
     */
    protected $vatId;

    /**
     * Tax ID of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TAX_ID")
     */
    protected $taxId;

    /**
     * The currency code of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CURRENCY_CODE")
     */
    protected $currencyCode;

    /**
     * Some comments about the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("COMMENT")
     */
    protected $comment;

    /**
     * The last update date for the customer.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d H:i:s'>")
     * @JMS\SerializedName("LASTUPDATE")
     */
    protected $lastUpdate;

    /**
     * Tags of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TAGS")
     */
    protected $tags;

    /**
     * The language code of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("LANGUAGE_CODE")
     */
    protected $languageCode;

    /**
     * URL for changing Master data and invoice data.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CHANGEDATA_URL")
     */
    protected $changeDataUrl;

    /**
     * URL leading to Dashboard.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DASHBOARD_URL")
     */
    protected $dashboardUrl;

    /**
     * The credit balance of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CREDIT_BALANCE")
     */
    protected $creditBalance;

    /**
     * Invoice delivery method.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("INVOICE_DELIVERY_METHOD")
     */
    protected $invoiceDeliveryMethod;

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
     * @param integer $customerId The ID.
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get the customer external ID.
     *
     * @return string
     */
    public function getCustomerExternalUid()
    {
        return $this->customerExternalUid;
    }

    /**
     * Set the customer external ID.
     *
     * @param string $customerExternalUid The external ID.
     * @return $this
     */
    public function setCustomerExternalUid($customerExternalUid)
    {
        $this->customerExternalUid = $customerExternalUid;

        return $this;
    }

    /**
     * Get the customer number.
     *
     * @return integer
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     * Set the customer number.
     *
     * @param integer $customerNumber The number.
     * @return $this
     */
    public function setCustomerNumber($customerNumber)
    {
        $this->customerNumber = $customerNumber;

        return $this;
    }

    /**
     * Get the days for payment.
     *
     * @return integer
     */
    public function getDaysForPayment()
    {
        return $this->daysForPayment;
    }

    /**
     * Set the days for payment.
     *
     * @param integer $daysForPayment The number of days for payment.
     * @return $this
     */
    public function setDaysForPayment($daysForPayment)
    {
        $this->daysForPayment = $daysForPayment;

        return $this;
    }

    /**
     * Get the date and time when the user was created.
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set the date and time when the user was created.
     *
     * @param \DateTime $created The creation date and time.
     * @return $this
     */
    public function setCreated(\DateTime $created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get the payment type.
     *
     * @return integer
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Set the payment type.
     *
     * @param integer $paymentType The payment type.
     * @return $this
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

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
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
     */
    public function setBankBIC($bankBIC)
    {
        $this->bankBIC = $bankBIC;

        return $this;
    }

    /**
     * Get the bank account owner address.
     *
     * @return string
     */
    public function getBankAccountOwnerAddress()
    {
        return $this->bankAccountOwnerAddress;
    }

    /**
     * Set the bank account owner address.
     *
     * @param string $bankAccountOwnerAddress The address.
     * @return $this
     */
    public function setBankAccountOwnerAddress($bankAccountOwnerAddress)
    {
        $this->bankAccountOwnerAddress = $bankAccountOwnerAddress;

        return $this;
    }

    /**
     * Get the bank account owner city.
     *
     * @return string
     */
    public function getBankAccountOwnerCity()
    {
        return $this->bankAccountOwnerCity;
    }

    /**
     * Set the bank account owner city.
     *
     * @param string $bankAccountOwnerCity The city.
     * @return $this
     */
    public function setBankAccountOwnerCity($bankAccountOwnerCity)
    {
        $this->bankAccountOwnerCity = $bankAccountOwnerCity;

        return $this;
    }

    /**
     * Get the bank account owner zip code.
     *
     * @return string
     */
    public function getBankAccountOwnerZipCode()
    {
        return $this->bankAccountOwnerZipCode;
    }

    /**
     * Set the bank account owner zip code.
     *
     * @param string $bankAccountOwnerZipCode The zip code.
     * @return $this
     */
    public function setBankAccountOwnerZipCode($bankAccountOwnerZipCode)
    {
        $this->bankAccountOwnerZipCode = $bankAccountOwnerZipCode;

        return $this;
    }

    /**
     * Get the bank account owner email.
     *
     * @return string
     */
    public function getBankAccountOwnerEmail()
    {
        return $this->bankAccountOwnerEmail;
    }

    /**
     * Set the bank account owner email.
     *
     * @param string $bankAccountOwnerEmail The email address.
     * @return $this
     */
    public function setBankAccountOwnerEmail($bankAccountOwnerEmail)
    {
        $this->bankAccountOwnerEmail = $bankAccountOwnerEmail;

        return $this;
    }

    /**
     * Get the bank account mandate reference.
     *
     * @return string
     */
    public function getBankAccountMandateReference()
    {
        return $this->bankAccountMandateReference;
    }

    /**
     * Set the bank account mandate reference.
     *
     * @param string $bankAccountMandateReference The mandate reference.
     * @return $this
     */
    public function setBankAccountMandateReference($bankAccountMandateReference)
    {
        $this->bankAccountMandateReference = $bankAccountMandateReference;

        return $this;
    }

    /**
     * Check if the payment notice should be shown.
     *
     * @return boolean
     */
    public function shouldShowPaymentNotice()
    {
        return $this->showPaymentNotice;
    }

    /**
     * Set if the payment notice should be shown.
     *
     * @param boolean $showPaymentNotice Flag if the payment notice should be shown.
     * @return $this
     */
    public function setShowPaymentNotice($showPaymentNotice)
    {
        $this->showPaymentNotice = $showPaymentNotice;

        return $this;
    }

    /**
     * Get the customer type.
     *
     * @return string
     */
    public function getCustomerType()
    {
        return $this->customerType;
    }

    /**
     * Set the customer type.
     *
     * @param string $customerType The type.
     * @return $this
     */
    public function setCustomerType($customerType)
    {
        $this->customerType = $customerType;

        return $this;
    }

    /**
     * Check if the customer has opted in for newsletter.
     *
     * @return boolean
     */
    public function hasNewsletterOptIn()
    {
        return $this->newsletterOptIn;
    }

    /**
     * Set the newsletter opt in.
     *
     * @param boolean $newsletterOptIn Flag if the customer opted in.
     * @return $this
     */
    public function setNewsletterOptIn($newsletterOptIn)
    {
        $this->newsletterOptIn = $newsletterOptIn;

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
     * @param string $affiliate The affiliate.
     * @return $this
     */
    public function setAffiliate($affiliate)
    {
        $this->affiliate = $affiliate;

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
     * Set the has of the customer.
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
     * Get the bank account mandate reference date.
     *
     * @return \DateTime
     */
    public function getBankAccountMandateReferenceDate()
    {
        return $this->bankAccountMandateReferenceDate;
    }

    /**
     * Set the bank account mandate reference date.
     *
     * @param \DateTime $bankAccountMandateReferenceDate The date as string.
     * @return $this
     */
    public function setBankAccountMandateReferenceDate(\DateTime $bankAccountMandateReferenceDate)
    {
        $this->bankAccountMandateReferenceDate = $bankAccountMandateReferenceDate;

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
     * @param string $organization The organization.
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Get the academic title.
     *
     * @return string
     */
    public function getTitleAcademic()
    {
        return $this->titleAcademic;
    }

    /**
     * Set the academic title.
     *
     * @param string $titleAcademic The title.
     * @return $this
     */
    public function setTitleAcademic($titleAcademic)
    {
        $this->titleAcademic = $titleAcademic;

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
     * @param string $salutation The salutation.
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;

        return $this;
    }

    /**
     * Get the first name.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the first name.
     *
     * @param string $firstName The name.
     * @return $this
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
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the full name of the customer.
     *
     * @return string
     */
    public function getFullName()
    {
        return implode(' ', array($this->firstName, $this->lastName));
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
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;

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
     * Set the customer country code (ISO 3166 ALPHA-2).
     *
     * @param string $countryCode The country code.
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get the secondary address.
     *
     * @return string
     */
    public function getSecondaryAddress()
    {
        return $this->secondaryAddress;
    }

    /**
     * Set the secondary address.
     *
     * @param string $secondaryAddress
     * @return $this
     */
    public function setSecondaryAddress($secondaryAddress)
    {
        $this->secondaryAddress = $secondaryAddress;

        return $this;
    }

    /**
     * Get the state.
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the state.
     *
     * @param string $state The state.
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get the phone number.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the phone number.
     *
     * @param string $phone The phone number.
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the fax.
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set the fac number.
     *
     * @param string $fax The fax number.
     * @return $this
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get the email address.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the email address.
     *
     * @param string $email The email.
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the CC email address.
     *
     * @return string
     */
    public function getEmailCC()
    {
        return $this->emailCC;
    }

    /**
     * Set the email CC.
     *
     * @param string $emailCC The email.
     * @return $this
     */
    public function setEmailCC($emailCC)
    {
        $this->emailCC = $emailCC;

        return $this;
    }

    /**
     * Get the birthday.
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set the birthday.
     *
     * @param \DateTime $birthday The birthday.
     * @return $this
     */
    public function setBirthday(\DateTime $birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get the payment mail address.
     *
     * @return string
     */
    public function getPaymentMailAddress()
    {
        return $this->paymentMailAddress;
    }

    /**
     * Set the payment mail address.
     *
     * @param string $paymentMailAddress The address.
     * @return $this
     */
    public function setPaymentMailAddress($paymentMailAddress)
    {
        $this->paymentMailAddress = $paymentMailAddress;

        return $this;
    }

    /**
     * Get the VAT ID.
     *
     * @return string
     */
    public function getVatId()
    {
        return $this->vatId;
    }

    /**
     * Set the VAT ID.
     *
     * @param string $vatId The VAT ID.
     * @return $this
     */
    public function setVatId($vatId)
    {
        $this->vatId = $vatId;

        return $this;
    }

    /**
     * Get the tax ID.
     *
     * @return string
     */
    public function getTaxId()
    {
        return $this->taxId;
    }

    /**
     * Set the tax ID.
     *
     * @param string $taxId The tax ID.
     * @return $this
     */
    public function setTaxId($taxId)
    {
        $this->taxId = $taxId;

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
     * @param string $currencyCode The currency code.
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

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
     * Set the comment for the customer.
     *
     * @param string $comment
     * @return $this
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get the date and time the customer was last updated.
     *
     * @return \DateTime
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Set the last update date and time.
     *
     * @param \DateTime $lastUpdate The last update date and time.
     * @return $this
     */
    public function setLastUpdate(\DateTime $lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get the tags of the customer.
     *
     * @return array
     */
    public function getTags()
    {
        $tags = explode(',', $this->tags);

        return array_map('trim', $tags);
    }

    /**
     * Set tags for the customer.
     *
     * @param array $tags The tags to set.
     * @return $this
     */
    public function setTags(array $tags)
    {
        $this->tags = implode(', ', $tags);

        return $this;
    }

    /**
     * Get the language code.
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * Set the language code.
     *
     * @param string $languageCode The language code.
     * @return $this
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    /**
     * Get the change data URL.
     *
     * @return string
     */
    public function getChangeDataUrl()
    {
        return $this->changeDataUrl;
    }

    /**
     * Set the change data URL.
     *
     * @param string $changeDataUrl The URL.
     * @return $this
     */
    public function setChangeDataUrl($changeDataUrl)
    {
        $this->changeDataUrl = $changeDataUrl;

        return $this;
    }

    /**
     * Get the dashboard URL.
     *
     * @return string
     */
    public function getDashboardUrl()
    {
        return $this->dashboardUrl;
    }

    /**
     * Set the dashboard URL.
     *
     * @param string $dashboardUrl The URL.
     * @return $this
     */
    public function setDashboardUrl($dashboardUrl)
    {
        $this->dashboardUrl = $dashboardUrl;

        return $this;
    }

    /**
     * Get the credit balance.
     *
     * @return string
     */
    public function getCreditBalance()
    {
        return $this->creditBalance;
    }

    /**
     * Set the credit balance.
     *
     * @param string $creditBalance
     * @return $this
     */
    public function setCreditBalance($creditBalance)
    {
        $this->creditBalance = $creditBalance;

        return $this;
    }

    /**
     * Get the invoice delivery method.
     *
     * @return string
     */
    public function getInvoiceDeliveryMethod()
    {
        return $this->invoiceDeliveryMethod;
    }

    /**
     * Set the invoice delivery method.
     *
     * @param string $invoiceDeliveryMethod The delivery method.
     * @return $this
     */
    public function setInvoiceDeliveryMethod($invoiceDeliveryMethod)
    {
        $this->invoiceDeliveryMethod = $invoiceDeliveryMethod;

        return $this;
    }
}
