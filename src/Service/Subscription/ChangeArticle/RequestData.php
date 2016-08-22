<?php

namespace Speicher210\Fastbill\Api\Service\Subscription\ChangeArticle;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractRequestData;
use Speicher210\Fastbill\Api\Model\Addon;
use Speicher210\Fastbill\Api\Model\Feature;

/**
 * The request data for changing article of a subscription.
 */
final class RequestData extends AbstractRequestData
{
    /**
     * The subscription ID.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("SUBSCRIPTION_ID")
     */
    protected $subscriptionId;

    /**
     * The subscription quantity.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("QUANTITY")
     */
    protected $quantity;

    /**
     * The subscription article number.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ARTICLE_NUMBER")
     */
    protected $articleNumber;

    /**
     * The title of the article.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TITLE")
     */
    protected $title;

    /**
     * The description of the article.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DESCRIPTION")
     */
    protected $description;

    /**
     * The unit price.
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("UNIT_PRICE")
     */
    protected $unitPrice;

    /**
     * The currency code.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CURRENCY_CODE")
     */
    protected $currencyCode;

    /**
     * Flag if reset addons.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("RESET_ADDONS")
     */
    protected $resetAddons;

    /**
     * The coupon code.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("COUPON")
     */
    protected $coupon;

    /**
     * Addons.
     *
     * @var array
     *
     * @JMS\Type("array<Speicher210\Fastbill\Api\Model\Addon>")
     * @JMS\SerializedName("ADDONS")
     */
    protected $addons;

    /**
     * Product features.
     *
     * @var array
     *
     * @JMS\Type("array<Speicher210\Fastbill\Api\Model\Feature>")
     * @JMS\SerializedName("FEATURES")
     */
    protected $features = array();

    /**
     * Flag if suppress confirmation mail to customer.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("SUPPRESS_MAIL")
     */
    protected $suppressMail;

    /**
     * Constructor.
     *
     * @param integer $subscriptionId The subscription ID.
     * @param string $articleNumber The article number.
     */
    public function __construct($subscriptionId, $articleNumber)
    {
        $this->setSubscriptionId($subscriptionId);
        $this->setArticleNumber($articleNumber);
    }

    /**
     * Get the subscription ID.
     *
     * @return integer
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * Set the subscription ID.
     *
     * @param integer $subscriptionId The subscription ID.
     * @return RequestData
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * Get the quantity.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the quantity.
     *
     * @param integer $quantity The quantity.
     * @return RequestData
     */
    public function setQuantity($quantity)
    {
        if ($quantity < 1) {
            throw new \InvalidArgumentException('Quantity must be bigger than 0.');
        }
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the article number.
     *
     * @return integer
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
     * @return RequestData
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     * @return RequestData
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the unit price.
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * Set the unit price.
     *
     * @param float $unitPrice The price.
     * @return RequestData
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;

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
     * @return RequestData
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Check if the addons should be reset.
     *
     * @return boolean
     */
    public function isResetAddons()
    {
        return (boolean)$this->resetAddons;
    }

    /**
     * Set if the addons should be reset.
     *
     * @param boolean $resetAddons Flag if reset addons.
     * @return RequestData
     */
    public function setResetAddons($resetAddons)
    {
        $this->resetAddons = (integer)(boolean)$resetAddons;

        return $this;
    }

    /**
     * Get the coupon code.
     *
     * @return string
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * Set the coupon code.
     *
     * @param string $coupon The coupon code.
     * @return RequestData
     */
    public function setCoupon($coupon)
    {
        $this->coupon = $coupon;

        return $this;
    }

    /**
     * Get the addons.
     *
     * @return array
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

    /**
     * Get the features.
     *
     * @return array
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Set the features.
     *
     * @param Feature[] $features The features.
     * @return RequestData
     */
    public function setFeatures(array $features)
    {
        $this->features = $features;

        return $this;
    }

    /**
     * Check if suppress mail.
     *
     * @return boolean
     */
    public function getSuppressMail()
    {
        return (boolean)$this->suppressMail;
    }

    /**
     * Set if suppress mail.
     *
     * @param boolean $suppressMail Flag if suppress confirmation mail to customer.
     * @return RequestData
     */
    public function setSuppressMail($suppressMail)
    {
        $this->suppressMail = (integer)(boolean)$suppressMail;

        return $this;
    }
}
