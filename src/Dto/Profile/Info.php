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
    public int $id;

    /**
     * @var string|null Lowercased social name, such as "vkontakte", "facebook", etc.
     */
    public ?string $provider = null;

    /**
     * @var integer|null Unique ID transferred from social network.
     */
    public ?int $provider_id = null;

    /**
     * @var string|null User email.
     */
    public ?string $email = null;

    /**
     * @var string|null User first name.
     */
    public ?string $first_name = null;

    /**
     * @var string|null User last name.
     */
    public ?string $last_name = null;

    /**
     * @var string|null First and last name together.
     */
    public ?string $name = null;

    /**
     * @var boolean Flag whether user is moderator.
     */
    public bool $is_moderator;

    /**
     * @var int|null Genger. null - unknown, 0 - man, 1 - woman.
     */
    public ?int $sex;

    /**
     * @var string Unique username.
     */
    public string $username;

    /**
     * @var string|null URL to profile in social network when applicable.
     */
    public ?string $social_url = null;

    /**
     * @var string|null URL to user avatar when exists.
     */
    public ?string $avatar_url = null;

    /**
     * @var string|null Holds generic user defined description.
     */
    public ?string $about = null;

    /**
     * @var string Date and time when profile was created.
     */
    public string $created_date;

    /**
     * @var InfoMeta|null
     */
    public ?InfoMeta $meta;
}
