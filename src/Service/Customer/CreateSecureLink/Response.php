<?php

namespace Speicher210\Fastbill\Api\Service\Customer\CreateSecureLink;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractResponse;

/**
 * Response when creating secure links to account data and dashboard of the customer.
 */
class Response extends AbstractResponse
{
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
     * URL to the Account-Data.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ACCOUNTDATA_URL")
     */
    protected $accountDataUrl;

    /**
     * @return string
     */
    public function getDashboardUrl()
    {
        return $this->dashboardUrl;
    }

    /**
     * Set the dashboard URL.
     *
     * @param string $dashboardUrl The URL
     * @return Response
     */
    public function setDashboardUrl($dashboardUrl)
    {
        $this->dashboardUrl = $dashboardUrl;

        return $this;
    }

    /**
     * Get the account data URL.
     *
     * @return string
     */
    public function getAccountDataUrl()
    {
        return $this->accountDataUrl;
    }

    /**
     * Set the account data URL.
     *
     * @param string $accountDataUrl The URL
     * @return Response
     */
    public function setAccountDataUrl($accountDataUrl)
    {
        $this->accountDataUrl = $accountDataUrl;

        return $this;
    }
}
