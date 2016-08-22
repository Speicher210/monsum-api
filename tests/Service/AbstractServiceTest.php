<?php

namespace Speicher210\Fastbill\Test\Api\Service;

use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Speicher210\Fastbill\Api\ApiCredentials;
use Speicher210\Fastbill\Api\ApiResponseInterface;
use Speicher210\Fastbill\Api\Exception\ApiResponseException;
use Speicher210\Fastbill\Api\RequestInterface;
use Speicher210\Fastbill\Api\ResponseInterface;
use Speicher210\Fastbill\Api\Serializer\Handler\DateHandler;
use Speicher210\Fastbill\Api\ServiceInterface;
use Speicher210\Fastbill\Api\Transport\TransportInterface;

/**
 * Abstract class to test Fastbill services.
 */
abstract class AbstractServiceTest extends \PHPUnit_Framework_TestCase
{

    /**
     * The temporary directory for the serializer cache.
     *
     * @var string
     */
    private static $serializerTempDirectory;

    /**
     * {@inheritdoc}
     */
    public static function setUpBeforeClass()
    {
        if (self::$serializerTempDirectory === null) {
            self::$serializerTempDirectory = sys_get_temp_dir().'/'.uniqid('sp210_fastbill_api_test', true);
        }
    }

    public function testServiceThrowsExceptionsIfApiResponseHasErrors()
    {
        $class = $this->getClassUnderTest();

        $responseMock = $this->getMock(ResponseInterface::class);
        $responseMock
            ->expects($this->once())
            ->method('hasErrors')
            ->willReturn(true);
        $responseMock
            ->expects($this->once())
            ->method('getErrors')
            ->willReturn(array());
        $apiResponseMock = $this->getMock(ApiResponseInterface::class);
        $apiResponseMock
            ->expects($this->exactly(3))
            ->method('getResponse')
            ->willReturn($responseMock);
        $transportMock = $this->getMock(TransportInterface::class);
        $serializerMock = $this->getMock(SerializerInterface::class);
        $serializerMock
            ->expects($this->once())
            ->method('deserialize')
            ->willReturn($apiResponseMock);

        $service = new $class($transportMock, $serializerMock);

        $requestMock = $this->getMock(RequestInterface::class);
        $requestMock
            ->expects($this->once())
            ->method('getService')
            ->willReturn('test.service');
        $responseClass = $this->getMock(ApiResponseInterface::class);

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

        $transportMock = $this->getMock(TransportInterface::class);
        $transportMock
            ->expects($this->once())
            ->method('sendRequest')
            ->with($this->equalTo($transportRequest))
            ->willReturn($transportResponse);
        $transportMock
            ->expects($this->any())
            ->method('getCredentials')
            ->willReturn($apiCredentials);

        AnnotationRegistry::registerLoader('class_exists');

        $serializer = SerializerBuilder::create()
            ->setCacheDir(self::$serializerTempDirectory)
            ->configureHandlers(
                function (\JMS\Serializer\Handler\HandlerRegistry $registry) {
                    $registry->registerSubscribingHandler(new DateHandler());
                }
            )
            ->build();

        $class = $this->getClassUnderTest();
        $service = new $class($transportMock, $serializer);

        return $service;
    }
}
