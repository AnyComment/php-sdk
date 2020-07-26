<?php

namespace AnyComment\Dto\Page;

use AnyComment\Dto\Profile\Info;

/**
 * Class InfoMeta holds meta information for profile info DTO object.
 * @see Info $meta property for details.
 * @package AnyComment\Dto\Page
 */
class InfoMeta
{
    /**
     * @var bool Whether change of an email was requested.
     */
    public $new_email_requested;
}