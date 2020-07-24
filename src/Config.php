<?php


namespace AnyComment;


/**
 * Configuration object for core API object.
 *
 * @package AnyComment
 */
class Config
{
    /**
     * @var string Token used to access API.
     */
    private string $apiKey;
    private string $apiVersion = 'v1';
    private string $apiUrl = 'https://anycomment.io/v1';

    /**
     * AnyCommentConfig constructor.
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        if (empty($apiKey)) {
            throw new \InvalidArgumentException('Api key is not provided');
        }

        $this->apiKey = $apiKey;
    }

    /**
     * @param mixed $apiVersion
     */
    public function setApiVersion(string $apiVersion)
    {
        $this->apiVersion = trim($apiVersion, " \t\n\r\0\x0B/");
    }

    /**
     * @param string $apiUrl
     */
    public function setApiUrl(string $apiUrl)
    {
        $this->apiUrl = trim($apiUrl, " \t\n\r\0\x0B/");
    }

    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * @return string
     */
    public function getApiVersion(): string
    {
        return $this->apiVersion;
    }

    /**
     * @return string
     */
    public function getApiUrl(): string
    {
        return $this->apiUrl;
    }

    /**
     * Get base URL which contains URL + version.
     * @return string
     */
    public function getBaseApiUrl(): string
    {
        return $this->getApiUrl() . '/' . $this->getApiVersion();
    }
}
