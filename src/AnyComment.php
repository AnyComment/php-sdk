<?php

namespace AnyComment;

use AnyComment\Endpoints\Page;
use AnyComment\Endpoints\Comment;
use AnyComment\Endpoints\Profile;
use AnyComment\Endpoints\Website;

class AnyComment
{
    /**
     * @var AnyCommentConfig
     */
    private $config;

    /**
     * @var Api
     */
    private $api;

    /**
     * AnyComment constructor.
     * @param AnyCommentConfig $config
     */
    public function __construct(AnyCommentConfig $config)
    {
        $this->config = $config;
        $this->api = new Api($config);
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
