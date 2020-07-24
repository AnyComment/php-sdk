<?php

namespace AnyComment;

use AnyComment\Endpoints\Page;
use AnyComment\Endpoints\Comment;
use AnyComment\Endpoints\Profile;
use AnyComment\Endpoints\Website;

class Api
{
    /**
     * @var Config
     */
    private $config;

    /**
     * @var Request
     */
    private $api;

    /**
     * AnyComment constructor.
     * @param Config $config
     */
    public function __construct($config)
    {
        if (!$config instanceof Config) {
            throw new \InvalidArgumentException('Wrong config instance passed, expected ' . Config::class);
        }
        $this->config = $config;
        $this->api = new Request($config);
    }

    /**
     * Communicate with website endpoints.
     *
     * @return Website
     */
    public function getWebsite()
    {
        return new Website($this->api);
    }

    /**
     * Communicate with page endpoints.
     *
     * @return Page
     */
    public function getPage()
    {
        return new Page($this->api);
    }

    /**
     * Communicate with page endpoints.
     *
     * @return Profile
     */
    public function getProfile()
    {
        return new Profile($this->api);
    }

    /**
     * Communicate with comment endpoints.
     *
     * @return Comment
     */
    public function getComment()
    {
        return new Comment($this->api);
    }
}
