<?php

namespace AnyComment\Tests;

use AnyComment\Config;
use AnyComment\Api;
use AnyComment\Endpoints\Page;
use AnyComment\Endpoints\Comment;
use AnyComment\Endpoints\Profile;
use AnyComment\Endpoints\Website;

class ApiTest extends \PHPUNIT_Framework_TestCase
{
    public function testFailsAsIncorrectConfigInstance()
    {
        $this->setExpectedException(\InvalidArgumentException::class, 'Invalid config instance provided');

        new Api(new \stdClass());
    }

    public function testExpectToGetEndpointInstances()
    {
        $config = new Config('api-key');
        $api = new Api($config);

        $this->assertInstanceOf(Website::class, $api->getWebsite());
        $this->assertInstanceOf(Page::class, $api->getPage());
        $this->assertInstanceOf(Comment::class, $api->getComment());
        $this->assertInstanceOf(Profile::class, $api->getProfile());
    }
}
