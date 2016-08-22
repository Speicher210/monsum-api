<?php

namespace Speicher210\Fastbill\Api\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Trait for article data.
 */
trait ArticleTrait
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
     * Article tags.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TAGS")
     */
    protected $tags;

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
     * The setup fee.
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("SETUP_FEE")
     */
    protected $setupFee;

    /**
     * Allow multiple.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("ALLOW_MULTIPLE")
     */
    protected $allowMultiple;

    /**
     * Flag if article is addon.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("IS_ADDON")
     */
    protected $isAddon;

    /**
     * Article translations.
     *
     * @var Translation
     *
     * @JMS\Type("Speicher210\Fastbill\Api\Model\Translation")
     * @JMS\SerializedName("TRANSLATIONS")
     */
    protected $translation;

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
     * VAT percent.
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("VAT_PERCENT")
     */
    protected $vatPercent;

    /**
     * The subscription interval (ex: "1 month").
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("SUBSCRIPTION_INTERVAL")
     */
    protected $subscriptionInterval;

    /**
     * Number of billing events for the subscription.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("SUBSCRIPTION_NUMBER_EVENTS")
     */
    protected $subscriptionNumberEvents;

    /**
     * Subscription trial period (ex: "2 day").
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("SUBSCRIPTION_TRIAL")
     */
    protected $subscriptionTrial;

    /**
     * Subscription first contract period (ex: "1 month").
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("SUBSCRIPTION_DURATION")
     */
    protected $subscriptionDuration;

    /**
     * Subscription following contract period (ex: "1 month").
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("SUBSCRIPTION_DURATION_FOLLOW")
     */
    protected $subscriptionDurationFollow;

    /**
     * Subscription cancellation period (ex: "1 day").
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("SUBSCRIPTION_CANCELLATION")
     */
    protected $subscriptionCancellationPeriod;

    /**
     * Success URL.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("RETURN_URL_SUCCESS")
     */
    protected $returnUrlSuccess;

    /**
     * Cancel URL.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("RETURN_URL_CANCEL")
     */
    protected $returnUrlCancel;

    /**
     * Checkout URL.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CHECKOUT_URL")
     */
    protected $checkoutUrl;

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
     * @return $this
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
     * @return $this
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
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the tags.
     *
     * @return array
     */
    public function getTags()
    {
        $tags = explode(',', $this->tags);

        return array_map('trim', $tags);
    }

    /**
     * Set the tags.
     * #
     * @param array $tags The tags to set.
     * @return $this
     */
    public function setTags(array $tags)
    {
        $this->tags = implode(', ', $tags);

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
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    /**
     * Get the setup fee.
     *
     * @return float
     */
    public function getSetupFee()
    {
        return $this->setupFee;
    }

    /**
     * Set the setup fee.
     *
     * @param float $setupFee The setup fee.
     * @return $this
     */
    public function setSetupFee($setupFee)
    {
        $this->setupFee = $setupFee;

        return $this;
    }

    /**
     * Check if it allows multiple instances.
     *
     * @return boolean
     */
    public function allowsMultiple()
    {
        return (boolean)$this->allowMultiple;
    }

    /**
     * Set if it allows multiple instances.
     *
     * @param boolean $allowMultiple The flag.
     * @return $this
     */
    public function setAllowMultiple($allowMultiple)
    {
        $this->allowMultiple = (integer)(boolean)$allowMultiple;

        return $this;
    }

    /**
     * Check if the article is an addon.
     *
     * @return boolean
     */
    public function isAddon()
    {
        return (boolean)$this->isAddon;
    }

    /**
     * Set that the article is an addon.
     *
     * @param boolean $isAddon Flag if the article is an addon.
     * @return $this
     */
    public function setIsAddon($isAddon)
    {
        $this->isAddon = (integer)(boolean)$isAddon;

        return $this;
    }

    /**
     * Get the translation.
     *
     * @return Translation
     */
    public function getTranslation()
    {
        return $this->translation;
    }

    /**
     * Set the translation.
     *
     * @param Translation $translation The translation to set.
     * @return $this
     */
    public function setTranslation(Translation $translation)
    {
        $this->translation = $translation;

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
     * Get the VAT percentage.
     *
     * @return float
     */
    public function getVatPercent()
    {
        return $this->vatPercent;
    }

    /**
     * Set the VAT percentage.
     *
     * @param float $vatPercent The VAT percentage.
     * @return $this
     */
    public function setVatPercent($vatPercent)
    {
        if ($vatPercent < 0 || $vatPercent > 100) {
            throw new \InvalidArgumentException('VAT percentage must be between 0-100');
        }
        $this->vatPercent = $vatPercent;

        return $this;
    }

    /**
     * Get the subscription interval.
     *
     * @return string
     */
    public function getSubscriptionInterval()
    {
        return $this->subscriptionInterval;
    }

    /**
     * Set the subscription interval.
     *
     * @param string $subscriptionInterval The interval.
     * @return $this
     */
    public function setSubscriptionInterval($subscriptionInterval)
    {
        $this->subscriptionInterval = $subscriptionInterval;

        return $this;
    }

    /**
     * Get the subscription number of events.
     *
     * @return integer
     */
    public function getSubscriptionNumberEvents()
    {
        return $this->subscriptionNumberEvents;
    }

    /**
     * Set the subscription number of events.
     *
     * @param integer $subscriptionNumberEvents The number of events.
     * @return $this
     */
    public function setSubscriptionNumberEvents($subscriptionNumberEvents)
    {
        $this->subscriptionNumberEvents = $subscriptionNumberEvents;

        return $this;
    }

    /**
     * Get the subscription trial.
     *
     * @return string
     */
    public function getSubscriptionTrial()
    {
        return $this->subscriptionTrial;
    }

    /**
     * Set the subscription trial.
     *
     * @param string $subscriptionTrial The subscription trial.
     * @return $this
     */
    public function setSubscriptionTrial($subscriptionTrial)
    {
        $this->subscriptionTrial = $subscriptionTrial;

        return $this;
    }

    /**
     * Get the subscription duration.
     *
     * @return string
     */
    public function getSubscriptionDuration()
    {
        return $this->subscriptionDuration;
    }

    /**
     * Set the subscription duration.
     *
     * @param string $subscriptionDuration The duration.
     * @return $this
     */
    public function setSubscriptionDuration($subscriptionDuration)
    {
        $this->subscriptionDuration = $subscriptionDuration;

        return $this;
    }

    /**
     * Get the subscription duration follow.
     *
     * @return string
     */
    public function getSubscriptionDurationFollow()
    {
        return $this->subscriptionDurationFollow;
    }

    /**
     * Set the subscription duration follow.
     *
     * @param string $subscriptionDurationFollow The duration follow.
     * @return $this
     */
    public function setSubscriptionDurationFollow($subscriptionDurationFollow)
    {
        $this->subscriptionDurationFollow = $subscriptionDurationFollow;

        return $this;
    }

    /**
     * Get the subscription cancellation period.
     * @return string
     */
    public function getSubscriptionCancellationPeriod()
    {
        return $this->subscriptionCancellationPeriod;
    }

    /**
     * Set the subscription cancellation period.
     *
     * @param string $subscriptionCancellationPeriod The period.
     * @return $this
     */
    public function setSubscriptionCancellationPeriod($subscriptionCancellationPeriod)
    {
        $this->subscriptionCancellationPeriod = $subscriptionCancellationPeriod;

        return $this;
    }

    /**
     * Get the success return URL.
     *
     * @return string
     */
    public function getReturnUrlSuccess()
    {
        return $this->returnUrlSuccess;
    }

    /**
     * Set the return success URL.
     *
     * @param string $returnUrlSuccess The URL.
     * @return $this
     */
    public function setReturnUrlSuccess($returnUrlSuccess)
    {
        $this->returnUrlSuccess = $returnUrlSuccess;

        return $this;
    }

    /**
     * Get the return cancel URL.
     *
     * @return string
     */
    public function getReturnUrlCancel()
    {
        return $this->returnUrlCancel;
    }

    /**
     * Set the return cancel URL.
     *
     * @param string $returnUrlCancel The URL.
     * @return $this
     */
    public function setReturnUrlCancel($returnUrlCancel)
    {
        $this->returnUrlCancel = $returnUrlCancel;

        return $this;
    }

    /**
     * Get the checkout URL.
     *
     * @return string
     */
    public function getCheckoutUrl()
    {
        return $this->checkoutUrl;
    }

    /**
     * Set the checkout URL.
     *
     * @param string $checkoutUrl The URL.
     * @return $this
     */
    public function setCheckoutUrl($checkoutUrl)
    {
        $this->checkoutUrl = $checkoutUrl;

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
     * @return $this
     */
    public function setFeatures(array $features)
    {
        $this->features = $features;

        return $this;
    }

    /**
     * Add a feature.
     *
     * @param Feature $feature The feature to add.
     */
    public function addFeature(Feature $feature)
    {
        $this->features[] = $feature;
    }
}
