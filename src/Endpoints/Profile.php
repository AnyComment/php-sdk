<?php

namespace AnyComment\Endpoints;

use AnyComment\Request;
use AnyComment\Dto\Profile\Info;

/**
 * Class Profile represents class which communicates with profile specific endpoints.
 *
 * @package AnyComment\Endpoints
 */
class Profile
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
     * @param int $id Profile ID to get info about.
     * @param string $token OAuth token, which should be received via authorization widget.
     * @return Info
     * @throws \AnyComment\Exceptions\ClassMapException
     * @throws \AnyComment\Exceptions\RequestFailException
     */
    public function getInfo($id, $token)
    {
        $response = $this->api->get('client/profile/index', ['id' => $id, 'token' => $token]);
        return $this->api->mapResponse($response, Info::class);
    }
}
