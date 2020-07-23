<?php

namespace AnyComment\Endpoints;

use AnyComment\Api;
use AnyComment\Dto\Profile\Info;

/**
 * Class Profile represents class which communicates with profile specific endpoints.
 *
 * @package AnyComment\Endpoints
 */
class Profile
{
    /**
     * @var Api
     */
    private $api;

    /**
     * Website constructor.
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * Get application (website) information.
     *
     * @param int $id Profile ID to get info about.
     * @return Info
     */
    public function getInfo(int $id)
    {
        $response = $this->api->get('client/profile/index', ['id' => $id]);
        return $this->api->mapResponse($response, Info::class);
    }
}
