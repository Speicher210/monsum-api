<?php

namespace Speicher210\Monsum\Test\Api\Service;

use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Speicher210\Monsum\Api\ApiCredentials;
use Speicher210\Monsum\Api\ApiResponseInterface;
use Speicher210\Monsum\Api\Exception\ApiResponseException;
use Speicher210\Monsum\Api\RequestInterface;
use Speicher210\Monsum\Api\ResponseInterface;
use Speicher210\Monsum\Api\Serializer\Handler\DateHandler;
use Speicher210\Monsum\Api\ServiceInterface;
use Speicher210\Monsum\Api\Transport\TransportInterface;

/**
 * Abstract class to test Monsum services.
 */
abstract class AbstractServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testServiceThrowsExceptionsIfApiResponseHasErrors()
    {
        $class = $this->getClassUnderTest();

        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock
            ->expects(static::once())
            ->method('hasErrors')
            ->willReturn(true);
        $responseMock
            ->expects(static::once())
            ->method('getErrors')
            ->willReturn(array());
        $apiResponseMock = $this->createMock(ApiResponseInterface::class);
        $apiResponseMock
            ->expects(static::exactly(3))
            ->method('getResponse')
            ->willReturn($responseMock);
        $transportMock = $this->createMock(TransportInterface::class);
        $serializerMock = $this->createMock(SerializerInterface::class);
        $serializerMock
            ->expects(static::once())
            ->method('deserialize')
            ->willReturn($apiResponseMock);

        $service = new $class($transportMock, $serializerMock);

        $requestMock = $this->createMock(RequestInterface::class);
        $requestMock
            ->expects(static::once())
            ->method('getService')
            ->willReturn('test.service');
        $responseClass = $this->createMock(ApiResponseInterface::class);

        $method = new \ReflectionMethod(get_class($service), 'sendRequest');
        $method->setAccessible(true);

        $this->setExpectedException(ApiResponseException::class, 'Error calling "test.service"');

        $method->invoke($service, $requestMock, $responseClass);
    }

    /**
     * Get the class name under test.
     *
     * @return string
     */
    abstract protected function getClassUnderTest();

    /**
     * Get the service to test with the mocked transport.
     *
     * @return ServiceInterface
     */
    protected function getServiceToTest()
    {
        $reflection = new \ReflectionObject($this);

        $fixturesDirectory = dirname($reflection->getFileName()).'/Expected/';

        $transportRequest = file_get_contents($fixturesDirectory.$this->getName().'Request.json');
        $transportRequest = json_encode(json_decode($transportRequest));
        $transportResponse = file_get_contents($fixturesDirectory.$this->getName().'Response.json');

        $apiCredentials = new ApiCredentials('email@test.com', 'api-key', 'account-hash');

        $transportMock = $this->createMock(TransportInterface::class);
        $transportMock
            ->expects(static::once())
            ->method('sendRequest')
            ->with(static::equalTo($transportRequest))
            ->willReturn($transportResponse);
        $transportMock
            ->expects(static::any())
            ->method('getCredentials')
            ->willReturn($apiCredentials);

        AnnotationRegistry::registerLoader('class_exists');

        $serializer = SerializerBuilder::create()
            ->configureHandlers(
                function (\JMS\Serializer\Handler\HandlerRegistry $registry) {
                    $registry->registerSubscribingHandler(new DateHandler());
                }
            )
            ->build();

        $class = $this->getClassUnderTest();
        return new $class($transportMock, $serializer);
    }
}
