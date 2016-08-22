<?php

namespace Speicher210\Fastbill\Api\Exception;

/**
 * Exception thrown when the API returns an error in the response.
 */
class ApiResponseException extends \RuntimeException
{
    /**
     * Errors in the API response.
     *
     * @var array
     */
    protected $errors = array();

    /**
     * Constructor.
     *
     * @param string $message The error message.
     * @param array $errors The errors in the API response.
     * @param \Exception $previous Previous exception.
     * @param integer $code The error code.
     */
    public function __construct($message, array $errors = array(), \Exception $previous = null, $code = 0)
    {
        parent::__construct($message, $code, $previous);

        $this->errors = $errors;
    }

    /**
     * Get the errors in the API response.
     *
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }
}
