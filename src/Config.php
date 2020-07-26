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
    private $apiKey;
    private $apiVersion = 'v1';
    private $apiUrl = 'https://anycomment.io/v1';

    /**
     * AnyCommentConfig constructor.
     * @param string $apiKey
     */
    public function __construct($apiKey)
    {
        if (empty($apiKey)) {
            throw new \InvalidArgumentException('Api key is not provided');
        }

        $this->apiKey = $apiKey;
    }

    /**
     * @param string $apiVersion
     */
    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = trim($apiVersion, " \t\n\r\0\x0B/");
    }

    /**
     * @param string $apiUrl
     */
    public function setApiUrl($apiUrl)
    {
        $this->apiUrl = trim($apiUrl, " \t\n\r\0\x0B/");
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @return string
     */
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    /**
     * @return string
     */
    public function getApiUrl()
    {
        return $this->apiUrl;
    }

    /**
     * Get base URL which contains URL + version.
     * @return string
     */
    public function getBaseApiUrl()
    {
        return $this->getApiUrl() . '/' . $this->getApiVersion();
    }
}
