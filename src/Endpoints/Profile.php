<?php

namespace AnyComment\Endpoints;

use AnyComment\Dto\Profile\Index\ProfileInfoResponse;

/**
 * Class Profile represents class which communicates with profile specific endpoints.
 *
 * @package AnyComment\Endpoints
 */
class Profile extends BaseEndpoint
{
    /**
     * Get application (website) information.
     *
     * @param int $id Profile ID to get info about.
     * @param string $token OAuth token, which should be received via authorization widget.
     * @return ProfileInfoResponse
     * @throws \AnyComment\Exceptions\ClassMapException
     * @throws \AnyComment\Exceptions\RequestFailException
     */
    public function getInfo($id, $token)
    {
        $response = $this->getApi()->get('client/profile/index', ['id' => $id, 'token' => $token]);
        return $this->getApi()->mapResponse($response, ProfileInfoResponse::class);
    }
}
