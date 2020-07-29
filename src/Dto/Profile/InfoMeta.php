<?php

namespace AnyComment\Dto\Page;

use AnyComment\Dto\Profile\ProfileInfoResponse;

/**
 * Class InfoMeta holds meta information for profile info DTO object.
 * @see ProfileInfoResponse $meta property for details.
 * @package AnyComment\Dto\Page
 */
class InfoMeta
{
    /**
     * @var bool Whether change of an email was requested.
     */
    public $new_email_requested;
}