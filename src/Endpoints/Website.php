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
class Website extends BaseEndpoint
{
    /**
     * Get application (website) information.
     *
     * @return AppInfo
     * @throws ClassMapException
     * @throws RequestFailException
     */
    public function getInfo()
    {
        $response = $this->getApi()->get('client/app/info');
        return $this->getApi()->mapResponse($response, AppInfo::class);
    }
}
