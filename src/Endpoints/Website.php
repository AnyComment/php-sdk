<?php

namespace AnyComment\Endpoints;

use AnyComment\Request;
use AnyComment\Dto\Website\AppInfo;
use AnyComment\Exceptions\ClassMapException;
use AnyComment\Exceptions\RequestFailException;

/**
 * Class Website represents class which communicates with website specific endpoints.
 *
 * @package AnyComment\Endpoints
 */
class Website
{
    /**
     * @var Request
     */
    private $api;

    /**
     * Website constructor.
     * @param Request $api
     */
    public function __construct(Request $api)
    {
        $this->api = $api;
    }

    /**
     * Get application (website) information.
     *
     * @return AppInfo
     * @throws ClassMapException
     * @throws RequestFailException
     */
    public function getInfo()
    {
        $response = $this->api->get('client/app/info');
        return $this->api->mapResponse($response, AppInfo::class);
    }
}
