<?php

namespace Speicher210\Fastbill\Api\Service\Customer\Get;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractRequestData;

/**
 * The request data for getting the customers.
 */
final class RequestData extends AbstractRequestData
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
     * The customer external ID.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CUSTOMER_EXT_UID")
     */
    protected $customerExternalUid;

    /**
     * The customer number.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CUSTOMER_NUMBER")
     */
    protected $customerNumber;

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
     * The customer city.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CITY")
     */
    protected $city;

    /**
     * Search for the term in fields: ORGANIZATION, FIRST_NAME, LAST_NAME, ADDRESS, ADDRESS_2, ZIPCODE, EMAIL.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TERM")
     */
    protected $term;

    /**
     * Comment.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("COMMENT")
     */
    protected $comment;

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
     * URL for changing Master data and invoice data.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CHANGEDATA_URL")
     */
    protected $changeDataUrl;

    /**
     * Filter for hash.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("HASH")
     */
    protected $hash;

    /**
     * Get the customer ID of the request body.
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
     * @param integer $customerId The customer ID.
     * @return RequestData
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get the customer external UID.
     *
     * @return string
     */
    public function getCustomerExternalUid()
    {
        return $this->customerExternalUid;
    }

    /**
     * Set the customer external UID.
     *
     * @param string $customerExternalUid The external UID.
     * @return RequestData
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
     * @param integer $customerNumber The customer number.
     * @return RequestData
     */
    public function setCustomerNumber($customerNumber)
    {
        $this->customerNumber = $customerNumber;

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
     * @param string $countryCode The country code.
     * @return RequestData
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get the customer city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the customer city.
     *
     * @param string $city The city.
     * @return RequestData
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the filter term.
     *
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Set the filter term.
     *
     * @param string $term The term to use for search.
     * @return RequestData
     */
    public function setTerm($term)
    {
        $this->term = $term;

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
     * @param string $comment The comment.
     * @return RequestData
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

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
     * @return RequestData
     */
    public function setDashboardUrl($dashboardUrl)
    {
        $this->dashboardUrl = $dashboardUrl;

        return $this;
    }

    /**
     * Get the URL for changing master data and invoice data.
     *
     * @return string
     */
    public function getChangeDataUrl()
    {
        return $this->changeDataUrl;
    }

    /**
     * Set the URL for changing master data and invoice data.
     *
     * @param string $changeDataUrl The change data URl.
     * @return RequestData
     */
    public function setChangeDataUrl($changeDataUrl)
    {
        $this->changeDataUrl = $changeDataUrl;

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
     * @return RequestData
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }
}
