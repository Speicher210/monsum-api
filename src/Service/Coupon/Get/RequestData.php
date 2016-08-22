<?php

namespace Speicher210\Fastbill\Api\Service\Coupon\Get;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractRequestData;

/**
 * The request data for getting the coupons.
 */
final class RequestData extends AbstractRequestData
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
     * Constructor.
     *
     * @param string $code The code.
     */
    public function __construct($code = null)
    {
        $this->setCode($code);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }
}
