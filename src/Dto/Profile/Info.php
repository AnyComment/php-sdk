<?php

namespace AnyComment\Dto\Profile;

use AnyComment\Dto\Page\InfoMeta;

/**
 * Class Info holds response from client/profile/index endpoint.
 *
 * @package AnyComment\Dto\Page
 */
class Info
{
    /**
     * @var integer Unique profile id.
     */
    public $id;

    /**
     * @var string|null Lowercased social name, such as "vkontakte", "facebook", etc.
     */
    public $provider;

    /**
     * @var integer|null Unique ID transferred from social network.
     */
    public $provider_id;

    /**
     * @var string|null User email.
     */
    public $email;

    /**
     * @var string|null User first name.
     */
    public $first_name;

    /**
     * @var string|null User last name.
     */
    public $last_name;

    /**
     * @var string|null First and last name together.
     */
    public $name;

    /**
     * @var boolean Flag whether user is moderator.
     */
    public $is_moderator;

    /**
     * @var int|null Genger. null - unknown, 0 - man, 1 - woman.
     */
    public $sex;

    /**
     * @var string Unique username.
     */
    public $username;

    /**
     * @var string|null URL to profile in social network when applicable.
     */
    public $social_url;

    /**
     * @var string|null URL to user avatar when exists.
     */
    public $avatar_url;

    /**
     * @var string|null Holds generic user defined description.
     */
    public $about;

    /**
     * @var string Date and time when profile was created.
     */
    public $created_date;

    /**
     * @var InfoMeta|null
     */
    public $meta;
}
