<?php

namespace Speicher210\Fastbill\Api\Service\Coupon\Check;

use JMS\Serializer\Annotation as JMS;
use Speicher210\Fastbill\Api\AbstractRequestData;

/**
 * The request data for checking a coupon.
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
     * The article number.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ARTICLE_NUMBER")
     */
    protected $articleNumber;

    /**
     * Constructor.
     *
     * @param string $code The code to request.
     * @param string $articleNumber The article number.
     */
    public function __construct($code, $articleNumber)
    {
        $this->setCode($code);
        $this->setArticleNumber($articleNumber);
    }

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
     * @param string $code The code.
     * @return RequestData
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

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
}
