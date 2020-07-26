<?php


namespace AnyComment\Endpoints;


use AnyComment\Request;

class BaseEndpoint
{
    /**
     * @var Request
     */
    private $api;

    /**
     * Website constructor.
     * @param Request $api
     */
    public function __construct($api)
    {
        if (!$api instanceof Request) {
            throw new \InvalidArgumentException('Invalid request object passed');
        }
        $this->api = $api;
    }

    /**
     * @return Request
     */
    public function getApi()
    {
        return $this->api;
    }
}
