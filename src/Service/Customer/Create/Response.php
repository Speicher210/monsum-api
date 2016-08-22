<?php

namespace Speicher210\Fastbill\Api\Service\Customer\Create;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractResponse;

/**
 * Response when getting the customers.
 */
class Response extends AbstractResponse
{
    /**
     * The customers ID.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("CUSTOMER_ID")
     */
    protected $customerId;

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
     * Get the customers ID.
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
     * @return Response
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

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
     * @return Response
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

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
     * @return Response
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
     * @return Response
     */
    public function setDashboardUrl($dashboardUrl)
    {
        $this->dashboardUrl = $dashboardUrl;

        return $this;
    }
}
