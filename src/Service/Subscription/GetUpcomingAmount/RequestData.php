<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\GetUpcomingAmount;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractRequestData;
use Speicher210\Fastbill\Api\Model\Addon;

/**
 * The request for getting the upcoming amount.
 */
final class RequestData extends AbstractRequestData
{
    /**
     * The article number.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ARTICLE_NUMBER")
     */
    protected $articleNumber;

    /**
     * The coupon.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("COUPON")
     */
    protected $coupon;

    /**
     * The country code (ISO 3166 ALPHA-2).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("COUNTRY_CODE")
     */
    protected $countryCode;

    /**
     * The addons.
     *
     * @var array
     *
     * @JMS\Type("array<Speicher210\Fastbill\Api\Model\Addon>")
     * @JMS\SerializedName("ADDONS")
     */
    protected $addons = array();

    /**
     * Get the article number.
     *
     * @return string
     */
    public function getArticleNumber()
    {
        return $this->articleNumber;
    }

    /**
     * Set the article number.
     *
     * @param string $articleNumber The article number.
     * @return RequestData
     */
    public function setArticleNumber($articleNumber)
    {
        $this->articleNumber = $articleNumber;

        return $this;
    }

    /**
     * Get the coupon.
     *
     * @return string
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * Set the coupon.
     *
     * @param string $coupon The coupon.
     * @return RequestData
     */
    public function setCoupon($coupon)
    {
        $this->coupon = $coupon;

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
     * Get the addons.
     *
     * @return Addon[]
     */
    public function getAddons()
    {
        return $this->addons;
    }

    /**
     * Set the addons.
     *
     * @param Addon[] $addons The addons.
     * @return RequestData
     */
    public function setAddons(array $addons)
    {
        $this->addons = $addons;

        return $this;
    }
}
