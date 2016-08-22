<?php

namespace Speicher210\Fastbill\Api;

use JMS\Serializer\Annotation as JMS;

/**
 * Abstract service response.
 */
class AbstractResponse implements ResponseInterface
{
    /**
     * Array of errors.
     *
     * @var array
     *
     * @JMS\SerializedName("ERRORS")
     * @JMS\Type("array<string, string>")
     */
    protected $errors = array();

    /**
     * The status of the entity created / updated.
     *
     * @var string
     *
     * @JMS\SerializedName("STATUS")
     * @JMS\Type("string")
     */
    protected $status;

    /**
     * {@inheritdoc}
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * {@inheritdoc}
     */
    public function hasErrors()
    {
        return count($this->errors) !== 0;
    }

    /**
     * {@inheritdoc}
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * {@inheritdoc}
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * {@inheritdoc}
     */
    public function isStatusSuccess()
    {
        return $this->getStatus() === self::STATUS_SUCCESS;
    }

    /**
     * {@inheritdoc}
     */
    public function isStatusValid()
    {
        return $this->getStatus() === self::STATUS_VALID;
    }

    /**
     * {@inheritdoc}
     */
    public function isStatusInvalid()
    {
        return $this->getStatus() === self::STATUS_INVALID;
    }
}
