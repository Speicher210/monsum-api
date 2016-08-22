<?php

namespace Speicher210\Fastbill\Api\Transport;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Speicher210\Fastbill\Api\ApiCredentials;

/**
 * Transport implementation with Guzzle.
 */
class GuzzleTransport extends AbstractTransport
{
    /**
     * The Guzzle client.
     *
     * @var Client
     */
    protected $client;

    /**
     * Constructor.
     *
     * @param ApiCredentials $credentials The API credentials.
     */
    public function __construct(ApiCredentials $credentials)
    {
        parent::__construct($credentials);

        $this->client = new Client(
            [
                // Base URI is used with relative requests
                'base_uri' => self::BASE_URL,
                // You can set any number of default request options.
                'auth' => [
                    $this->apiCredentials->getEmail(),
                    $this->apiCredentials->getApiKey(),
                ],
                'headers' => array(
                    'Content-Type' => 'application/json',
                ),
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function sendRequest($body)
    {
        try {
            $response = $this->client->request(
                'POST',
                null,
                [
                    'body' => $body
                ]
            );

            $body = $response->getBody()->getContents();
        } catch (RequestException $e) {
            $body = $e->getResponse()->getBody()->getContents();
        }

        return $body;
    }
}
