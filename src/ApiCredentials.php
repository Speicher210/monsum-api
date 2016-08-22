<?php

namespace Speicher210\Fastbill\Api;

/**
 * Store the API credentials for fastbill API.
 *
 * @see Look for the account hash under hosted pages in fastbill dashboard settings.
 */
class ApiCredentials
{
    /**
     * The email for authentication to fastbill API.
     *
     * @var string
     */
    protected $email;

    /**
     * The API key for authentication to fastbill API.
     *
     * @var string
     */
    protected $apiKey;

    /**
     * The Fastbill account hash.
     *
     * @var string
     */
    protected $accountHash;

    /**
     * Constructor.
     *
     * @param string $email The email for authentication to fastbill API.
     * @param string $apiKey The email for authentication to fastbill API.
     * @param string $accountHash The Fastbill account hash.
     */
    public function __construct($email, $apiKey, $accountHash = null)
    {
        $this->email = $email;
        $this->apiKey = $apiKey;
        $this->accountHash = $accountHash;
    }

    /**
     * Get the email for authentication to fastbill API.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the API key for authentication to fastbill API.
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Get the account hash.
     *
     * @return null|string
     */
    public function getAccountHash()
    {
        return $this->accountHash;
    }
}
