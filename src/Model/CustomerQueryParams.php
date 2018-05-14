<?php

namespace Speicher210\Monsum\Api\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Customer query parameters.
 */
class CustomerQueryParams
{
    /**
     * The address of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("address_line1")
     */
    private $address;

    /**
     * Affiliate.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("affiliate")
     */
    private $affiliate;

    /**
     * The city of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("city")
     */
    private $city;

    /**
     * The company name of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("company")
     */
    private $companyName;

    /**
     * The customer country code (ISO 3166 ALPHA-2).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("country")
     */
    private $countryCode;

    /**
     * The customer external ID.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("customer_ext_uid")
     */
    private $customerExternalUid;

    /**
     * The email address.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("email")
     */
    private $email;

    /**
     * The first name of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("first-name")
     */
    private $firstName;

    /**
     * The language code of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("lang")
     */
    private $languageCode;

    /**
     * The last name of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("last-name")
     */
    private $lastName;

    /**
     * Salutation.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("salutation")
     */
    private $salutation;

    /**
     * Academic title.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("title_academic")
     */
    private $titleAcademic;

    /**
     * The VAT identification number of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("vatid")
     */
    private $vatId;

    /**
     * The zipcode of the customer.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("postal-code")
     */
    private $zipCode;

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
     * @return CustomerQueryParams
     */
    public function setAddress($address)
    {
        $this->address = $address;

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
     * @return CustomerQueryParams
     */
    public function setAffiliate($affiliate)
    {
        $this->affiliate = $affiliate;

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
     * @return CustomerQueryParams
     */
    public function setCity($city)
    {
        $this->city = $city;

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
     * @return CustomerQueryParams
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

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
     * @return CustomerQueryParams
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

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
     * @return CustomerQueryParams
     */
    public function setCustomerExternalUid($customerExternalUid)
    {
        $this->customerExternalUid = $customerExternalUid;

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
     * @return CustomerQueryParams
     */
    public function setEmail($email)
    {
        $this->email = $email;

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
     * @return CustomerQueryParams
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

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
     * @return CustomerQueryParams
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;

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
     * @return CustomerQueryParams
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

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
     * @return CustomerQueryParams
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;

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
     * @return CustomerQueryParams
     */
    public function setTitleAcademic($titleAcademic)
    {
        $this->titleAcademic = $titleAcademic;

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
     * @return CustomerQueryParams
     */
    public function setVatId($vatId)
    {
        $this->vatId = $vatId;

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
     * @return CustomerQueryParams
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    private function toArray()
    {
        return [
            'address_line1' => $this->address,
            'affiliate' => $this->affiliate,
            'city' => $this->city,
            'company' => $this->companyName,
            'country' => $this->countryCode,
            'customer_ext_uid' => $this->customerExternalUid,
            'email' => $this->email,
            'first-name' => $this->firstName,
            'lang' => $this->languageCode,
            'last-name' => $this->lastName,
            "salutation" => $this->salutation,
            'title_academic' => $this->titleAcademic,
            'vatid' => $this->vatId,
            'postal-code' => $this->zipCode
        ];
    }

    public function __toString()
    {
        $query = \http_build_query($this->toArray(), null, '&');
        if ('' !== $query) {
            $query = '&' . $query;
        }

        return $query;
    }
}
