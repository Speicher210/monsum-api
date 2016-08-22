<?php

namespace Speicher210\Fastbill\Api\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Trait for coupon data.
 */
trait CouponTrait
{
    /**
     * The coupon code.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CODE")
     */
    protected $code;

    /**
     * The coupon title.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TITLE")
     */
    protected $title;

    /**
     * The coupon discount.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DISCOUNT")
     */
    protected $discount;

    /**
     * The coupon discount amount.
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("DISCOUNT_AMOUNT")
     */
    protected $discountAmount;

    /**
     * The coupon discount type.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DISCOUNT_TYPE")
     */
    protected $discountType;

    /**
     * The coupon discount period.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DISCOUNT_PERIOD")
     */
    protected $discountPeriod;

    /**
     * The coupon discount period amount.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("DISCOUNT_PERIOD_AMOUNT")
     */
    protected $discountPeriodAmount;

    /**
     * The coupon discount period unit.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DISCOUNT_PERIOD_UNIT")
     */
    protected $discountPeriodUnit;

    /**
     * The coupon campaign.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CAMPAIGN")
     */
    protected $campaign = '';

    /**
     * The coupon valid from.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\SerializedName("VALID_FROM")
     */
    protected $validFrom;

    /**
     * The coupon valid to.
     *
     * @var \DateTime
     *
     * @JMS\Type("DateTime<'Y-m-d'>")
     * @JMS\SerializedName("VALID_TO")
     */
    protected $validTo;

    /**
     * The coupon assigned articles.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ASSIGNED_ARTICLES")
     */
    protected $assignedArticles = '';

    /**
     * The coupon affiliate.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("AFFILIATE")
     */
    protected $affiliate;

    /**
     * The coupon number of usages.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("USAGES")
     */
    protected $usages;

    /**
     * The coupon maximum number of usages.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("USAGES_MAX")
     */
    protected $usagesMax;

    /**
     * The coupon state.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("STATE")
     */
    protected $state;

    /**
     * Get the code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the code.
     *
     * @param string $code The code to set.
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;

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
     * Get the discount.
     *
     * @return string
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the discount.
     *
     * @param string $discount
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get the discount amount.
     *
     * @return string
     */
    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    /**
     * Set the discount amount.
     *
     * @param float $discountAmount
     * @return $this
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->discountAmount = $discountAmount;

        return $this;
    }

    /**
     * Get the discount type.
     *
     * @return string
     */
    public function getDiscountType()
    {
        return $this->discountType;
    }

    /**
     * Set the discount type.
     *
     * @param string $discountType
     * @return $this
     */
    public function setDiscountType($discountType)
    {
        $this->discountType = $discountType;

        return $this;
    }

    /**
     * Get the discount period.
     *
     * @return string
     */
    public function getDiscountPeriod()
    {
        return $this->discountPeriod;
    }

    /**
     * Set the discount period.
     *
     * @param string $discountPeriod The period to set.
     * @return $this
     */
    public function setDiscountPeriod($discountPeriod)
    {
        $this->discountPeriod = $discountPeriod;

        return $this;
    }

    /**
     * Get the discount period amount.
     *
     * @return integer
     */
    public function getDiscountPeriodAmount()
    {
        return $this->discountPeriodAmount;
    }

    /**
     * Set the discount period amount.
     *
     * @param integer $discountPeriodAmount
     * @return $this
     */
    public function setDiscountPeriodAmount($discountPeriodAmount)
    {
        $this->discountPeriodAmount = $discountPeriodAmount;

        return $this;
    }

    /**
     * Get the discount period unit.
     *
     * @return string
     */
    public function getDiscountPeriodUnit()
    {
        return $this->discountPeriodUnit;
    }

    /**
     * Set the discount period unit.
     *
     * @param string $discountPeriodUnit
     * @return $this
     */
    public function setDiscountPeriodUnit($discountPeriodUnit)
    {
        $this->discountPeriodUnit = $discountPeriodUnit;

        return $this;
    }

    /**
     * Get the campaign.
     *
     * @return string
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Set the campaign.
     *
     * @param string $campaign The campaign.
     * @return $this
     */
    public function setCampaign($campaign)
    {
        $this->campaign = $campaign;

        return $this;
    }

    /**
     * Check if the coupon is part of a campaign.
     *
     * @return boolean
     */
    public function hasCampaign()
    {
        return $this->campaign != null;
    }

    /**
     * Get the date from which the coupon is valid.
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * Set the date from which the coupon is valid.
     *
     * @param \DateTime $validFrom The date.
     * @return $this
     */
    public function setValidFrom(\DateTime $validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * Get the date until the coupon is valid.
     *
     * @return \DateTime
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * Set the date until the coupon is valid.
     *
     * @param mixed $validTo The date.
     * @return $this
     */
    public function setValidTo($validTo)
    {
        $this->validTo = $validTo;

        return $this;
    }

    /**
     * Get the assigned articles.
     *
     * @return array
     */
    public function getAssignedArticles()
    {
        $articles = explode(',', $this->assignedArticles);

        return array_map('trim', $articles);
    }

    /**
     * Set the assigned articles.
     *
     * @param array $assignedArticles The assigned articles.
     * @return $this
     */
    public function setAssignedArticles(array $assignedArticles)
    {
        $this->assignedArticles = implode(', ', $assignedArticles);

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
     * Get the number of usages.
     *
     * @return integer
     */
    public function getUsages()
    {
        return $this->usages;
    }

    /**
     * Set the number of usages.
     *
     * @param integer $usages The usages.
     * @return $this
     */
    public function setUsages($usages)
    {
        $this->usages = $usages;

        return $this;
    }

    /**
     * Get the maximum usages.
     *
     * @return integer
     */
    public function getUsagesMax()
    {
        return $this->usagesMax;
    }

    /**
     * Set the maximum usages.
     *
     * @param integer $usagesMax The maximum usages.
     * @return $this
     */
    public function setUsagesMax($usagesMax)
    {
        $this->usagesMax = $usagesMax;

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
}
