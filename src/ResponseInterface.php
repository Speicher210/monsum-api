<?php

namespace Speicher210\Fastbill\Api;

/**
 * Interface for service responses.
 */
interface ResponseInterface
{
    const STATUS_SUCCESS = 'success';
    const STATUS_VALID = 'valid';
    const STATUS_INVALID = 'invalid';

    /**
     * Get the errors.
     *
     * @return array
     */
    public function getErrors();

    /**
     * Check if the response has errors.
     *
     * @return boolean
     */
    public function hasErrors();

    /**
     * Get the status of the entity created / updated.
     *
     * @return string
     */
    public function getStatus();

    /**
     * Set the status of the entity created / updated.
     *
     * @param string $status The status to set.
     */
    public function setStatus($status);

    /**
     * Check if the status is success or not.
     *
     * @return boolean
     */
    public function isStatusSuccess();

    /**
     * Check if the status is valid or not.
     *
     * @return boolean
     */
    public function isStatusValid();

    /**
     * Check if the status is invalid or not.
     *
     * @return boolean
     */
    public function isStatusInvalid();
}
