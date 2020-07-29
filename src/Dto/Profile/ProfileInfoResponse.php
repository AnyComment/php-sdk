<?php

namespace AnyComment\Dto\Profile;

use AnyComment\Dto\Envelopes\ResponseEnvelope;

/**
 * Class Info holds response from client/profile/index endpoint.
 *
 * @package AnyComment\Dto\Page
 */
class ProfileInfoResponse extends ResponseEnvelope
{
    /**
     * @var Info
     */
    public $response;
}
