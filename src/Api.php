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
    private Config $config;

    /**
     * @var Request
     */
    private Request $api;

    /**
     * AnyComment constructor.
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
        $this->api = new Request($config);
    }

    /**
     * Communicate with website endpoints.
     *
     * @return Website
     */
    public function getWebsite(): Website
    {
        return new Website($this->api);
    }

    /**
     * Communicate with page endpoints.
     *
     * @return Page
     */
    public function getPage(): Page
    {
        return new Page($this->api);
    }

    /**
     * Communicate with page endpoints.
     *
     * @return Profile
     */
    public function getProfile(): Profile
    {
        return new Profile($this->api);
    }

    /**
     * Communicate with comment endpoints.
     *
     * @return Comment
     */
    public function getComment(): Comment
    {
        return new Comment($this->api);
    }
}
