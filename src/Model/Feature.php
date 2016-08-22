<?php

namespace Speicher210\Fastbill\Api\Model;

use JMS\Serializer\Annotation as JMS;

/**
 * Feature model.
 */
class Feature
{
    /**
     * The code / title of the feature.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CODE")
     */
    protected $code;

    /**
     * Quantity.
     *
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("QUANTITY")
     */
    protected $quantity;

    /**
     * The value of the feature.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("VALUE")
     */
    protected $value;

    /**
     * Constructor.
     *
     * @param string $code The code.
     * @param integer $quantity The quantity.
     * @param string $value The value.
     */
    public function __construct($code, $quantity, $value)
    {
        $this->setCode($code);
        $this->setQuantity($quantity);
        $this->setValue($value);
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
     * @return Feature
     */
    public function setCode($code)
    {
        $this->code = $code;

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
     * @return Feature
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
     * Get the value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value.
     *
     * @param string $value The value.
     * @return Feature
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
