<?php


namespace AnyComment;


/**
 * Configuration object for core API object.
 *
 * @package AnyComment
 */
class AnyCommentConfig
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
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @param mixed $apiVersion
     */
    public function setApiVersion(string $apiVersion)
    {
        $this->apiVersion = trim($apiVersion);
    }

    /**
     * @param mixed $apiUrl
     */
    public function setApiUrl(string $apiUrl)
    {
        $this->apiUrl = trim($apiUrl);
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


    public function getApiUrl(): string
    {
        return rtrim($this->apiUrl, '/') . '/' . trim($this->apiVersion, '/');
    }
}
