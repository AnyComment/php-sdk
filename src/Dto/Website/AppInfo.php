<?php

namespace AnyComment\Dto\Website;

/**
 * Class AppInfo holds response from client/app/info endpoint.
 *
 * @package AnyComment\Dto\Website
 */
class AppInfo
{
    /**
     * @var integer Unique website ID.
     */
    public $id;

    /**
     * @var string Website URL.
     */
    public $url;
}
