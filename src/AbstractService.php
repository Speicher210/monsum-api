<?php

namespace Speicher210\Fastbill\Api;

use JMS\Serializer\SerializerInterface;
use Speicher210\Fastbill\Api\Exception\ApiResponseException;
use Speicher210\Fastbill\Api\Transport\TransportInterface;

/**
 * Abstract service.
 */
abstract class AbstractService implements ServiceInterface
{
    /**
     * Transport for the requests.
     *
     * @var TransportInterface
     */
    protected $transport;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * Constructor.
     *
     * @param TransportInterface $transport Transport for the requests.
     * @param SerializerInterface $serializer Serializer interface to serialize / deserialize the request / responses.
     */
    public function __construct(TransportInterface $transport, SerializerInterface $serializer)
    {
        $this->transport = $transport;
        $this->serializer = $serializer;
    }

    /**
     * Send a request to fastbill.
     *
     * @param mixed $request The request to send.
     * @param string $responseClass The class that should be used to unserialize the response.
     * @return ApiResponseInterface
     * @throws ApiResponseException If the API response has errors.
     */
    protected function sendRequest(RequestInterface $request, $responseClass)
    {
        if (!in_array(ApiResponseInterface::class, class_implements($responseClass))) {
            throw new \InvalidArgumentException('The response class must implement "'.ApiResponseInterface::class.'".');
        }

        $body = $this->serializer->serialize($request, 'json');
        $response = $this->transport->sendRequest($body);

        /** @var ApiResponseInterface $apiResponse */
        $apiResponse = $this->serializer->deserialize($response, $responseClass, 'json');
        if ($apiResponse->getResponse() !== null && $apiResponse->getResponse()->hasErrors()) {
            throw new ApiResponseException(
                sprintf('Error calling "%s"', $request->getService()),
                $apiResponse->getResponse()->getErrors()
            );
        }

        return $apiResponse;
    }
}
