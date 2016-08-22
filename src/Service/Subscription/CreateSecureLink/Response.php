<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\CreateSecureLink;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractResponse;

/**
 * Response when creating secure links for a subscription.
 */
class Response extends AbstractResponse
{
    /**
     * The addons URL.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ADDONS_URL")
     */
    protected $addonsUrl;

    /**
     * The cancel URL.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CANCEL_URL")
     */
    protected $cancelUrl;

    /**
     * The reactivate URL.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("REACTIVATE_URL")
     */
    protected $reactivateUrl;

    /**
     * Get the addons URL.
     *
     * @return string
     */
    public function getAddonsUrl()
    {
        return $this->addonsUrl;
    }

    /**
     * Set the addons URL.
     *
     * @param string $addonsUrl The URL.
     * @return Response
     */
    public function setAddonsUrl($addonsUrl)
    {
        $this->addonsUrl = $addonsUrl;

        return $this;
    }

    /**
     * Get the cancel URL.
     *
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * Set the cancel URL.
     *
     * @param string $cancelUrl The URL.
     * @return Response
     */
    public function setCancelUrl($cancelUrl)
    {
        $this->cancelUrl = $cancelUrl;

        return $this;
    }

    /**
     * Get the reactivate URL.
     *
     * @return string
     */
    public function getReactivateUrl()
    {
        return $this->reactivateUrl;
    }

    /**
     * Set the reactivate URL.
     *
     * @param string $reactivateUrl The URL.
     * @return Response
     */
    public function setReactivateUrl($reactivateUrl)
    {
        $this->reactivateUrl = $reactivateUrl;

        return $this;
    }
}
