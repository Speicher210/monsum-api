<?php

namespace Speicher210\Fastbill\Api\Model\Notification\Customer;

use JMS\Serializer\Annotation as JMS;

/**
 * Customer in a notification model.
 */
class Customer
{
    /**
     * The customer ID.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("customer_id")
     */
    protected $customerId;

    /**
     * The external customer ID.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("customer_ext_uid")
     */
    protected $customerExternalId;

    /**
     * Hash.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("hash")
     */
    protected $hash;

    /**
     * The own customer number.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("customer_number")
     */
    protected $customerNumber;

    /**
     * The company name of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("companyname")
     */
    protected $companyName;

    /**
     * The academic title of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("title")
     */
    protected $title;

    /**
     * The salutation of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("salutation")
     */
    protected $salutation;

    /**
     * The first name of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("firstname")
     */
    protected $firstName;

    /**
     * The last name of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("lastname")
     */
    protected $lastName;

    /**
     * The address of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("address")
     */
    protected $address;

    /**
     * The second row of an address of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("address_2")
     */
    protected $address2;

    /**
     * The zip code of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("zipcode")
     */
    protected $zipCode;

    /**
     * The city of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("city")
     */
    protected $city;

    /**
     * The country code of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("country_code")
     */
    protected $countryCode;

    /**
     * The email address of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("email")
     */
    protected $email;

    /**
     * The phone number of the customer.
     *
     * @var string
     * @JMS\Type("string")
     * @JMS\SerializedName("phone")
     */
    protected $phone;

    /**
     * The payment data URL.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("payment_data_url")
     */
    protected $paymentDataUrl;

    /**
     * The dashboard URL.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("dashboard_url")
     */
    protected $dashboardUrl;

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param int $customerId
     * @return Customer
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get the customer external ID.
     *
     * @return int
     */
    public function getCustomerExternalId()
    {
        return $this->customerExternalId;
    }

    /**
     * Set the customer external ID.
     *
     * @param int $customerExternalId The customer external ID.
     * @return Customer
     */
    public function setCustomerExternalId($customerExternalId)
    {
        $this->customerExternalId = $customerExternalId;

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
     * @return Customer
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get the customer number.
     *
     * @return int The customer number.
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     * Set the customer number.
     *
     * @param int $customerNumber The customer number.
     * @return Customer
     */
    public function setCustomerNumber($customerNumber)
    {
        $this->customerNumber = $customerNumber;

        return $this;
    }

    /**
     * Get the company name.
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set the company name.
     *
     * @param string $companyName The company name.
     * @return Customer
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get the title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the title.
     *
     * @param string $title The title.
     * @return Customer
     */
    public function setTitle($title)
    {
        $this->title = $title;

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
     * @return Customer
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
     * @param string $firstName The first name.
     * @return Customer
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
     * @return Customer
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
     * @return Customer
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the address2.
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set the address2.
     *
     * @param string $address2 The address2.
     * @return Customer
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
     * @return Customer
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
     * @return Customer
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
     * Set the country code.
     *
     * @param string $countryCode The country code.
     * @return Customer
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get the email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the email.
     *
     * @param string $email The email.
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the phone number of the customer.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the phone number of the customer.
     *
     * @param string $phone The phone number to set.
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the payment data URL.
     *
     * @return string
     */
    public function getPaymentDataUrl()
    {
        return $this->paymentDataUrl;
    }

    /**
     * Set the payment data URL.
     *
     * @param string $paymentDataUrl The payment data URL.
     * @return Customer
     */
    public function setPaymentDataUrl($paymentDataUrl)
    {
        $this->paymentDataUrl = $paymentDataUrl;

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
     * @param string $dashboardUrl The dashboard URL.
     * @return Customer
     */
    public function setDashboardUrl($dashboardUrl)
    {
        $this->dashboardUrl = $dashboardUrl;

        return $this;
    }
}
