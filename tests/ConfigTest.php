<?php

use PHPUnit\Framework\TestCase;
use AnyComment\Config;

/**
 * Class ConfigTest helps to covers cases for config.
 */
class ConfigTest extends TestCase
{
    public function testFailsAsApiKeyNotProvided()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Api key is not provided');
        new Config('');
    }

    public function testGeneratesCorrectBaseUrl()
    {
        $config = $this->prepareMock('my-api-key', 'https://anycomment.io', 'v1');
        $this->assertEquals('https://anycomment.io/v1', $config->getBaseApiUrl());
    }

    public function testTrimSlashesFromApiUrl()
    {
        $config = $this->prepareMock('my-api-key', 'https://anycomment.io/', 'v1');
        $this->assertEquals('https://anycomment.io/v1', $config->getBaseApiUrl());
    }

    public function testTrimSlashesFromApiVersion()
    {
        $config = $this->prepareMock('my-api-key', 'https://anycomment.io', '/v1/');
        $this->assertEquals('https://anycomment.io/v1', $config->getBaseApiUrl());
    }

    private function prepareMock($apiKe, $apiUrl, $apiVersion)
    {
        $config = new Config($apiKe);
        $config->setApiUrl($apiUrl);
        $config->setApiVersion($apiVersion);

        return $config;
    }
}
