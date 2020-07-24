<?php

use PHPUnit\Framework\TestCase;
use \Psr\Http\Message\ResponseInterface;
use AnyComment\Config;
use AnyComment\Request;

class RequestTest extends TestCase
{
    public function testFailsAsWrongConfigInstance()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessageMatches('/Wrong config instance passed/');
        (new Request(new stdClass()));
    }

    public function testFailsAsCannotMapWrongResponseInstance()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessageMatches('/Wrong response instance passed/');
        (new Request(new Config('api-key')))->mapResponse(new stdClass(), stdClass::class);
    }

    public function testMappingFailsAsNoneStringNamespacePassed()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Non string value passed as class namespace');

        $config = new Config('api-key');
        $request = new Request($config);

        /**
         * @var $response ResponseInterface
         */
        $response = \Mockery::mock('SomeResponse, \Psr\Http\Message\ResponseInterface');

        $request->mapResponse($response, new stdClass());
    }

    public function testMappingFailsAsEmptyStringNamespacePassed()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Mapping class namespace is not provided');

        $config = new Config('api-key');
        $request = new Request($config);

        /**
         * @var $response ResponseInterface
         */
        $response = \Mockery::mock('SomeResponse, \Psr\Http\Message\ResponseInterface');

        $request->mapResponse($response, '');
    }
}
