<?php

namespace AnyComment\Dto\Website;

use AnyComment\Dto\Envelopes\ResponseEnvelope;

/**
 * Class AppInfo holds response from client/app/info endpoint.
 *
 * @package AnyComment\Dto\Website
 */
class AppInfoResponse extends ResponseEnvelope
{
    /**
     * @var AppInfo
     */
    public $response;
}
