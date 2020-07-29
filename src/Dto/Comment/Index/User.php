<?php


namespace AnyComment\Dto\Comment\Index;


class User
{
    /**
     * @var int Unique user id.
     */
    public $id;

    /**
     * @var string|null Account type. null = guest, otherwise mentioned. Normally when user is social related, it has
     * lowercased social name.
     */
    public $account_type;

    /**
     * @var string
     */
    public $first_name;

    /**
     * @var string|null
     */
    public $last_name;

    /**
     * @var string|null
     */
    public $email;

    /**
     * @var string First and last name together.
     */
    public $name;

    /**
     * @var int|null Author's sex. Available values: null - unknown, 1 - male, 2 - female
     */
    public $sex;

    /**
     * @var string|null
     */
    public $username;

    /**
     * @var string|null Avatar received from a social network, this is a raw URL from social network. In some cases,
     * this avatar may not be accessible anymore, for example for Facebook users. They have avatar tokenized, so it is
     * better to rely on $avatar_url property instead.
     */
    public $social_url;

    /**
     * @var string|null Avatar URL stored on AnyComment CDN servers. This is eather original avatar from social
     * network or the one user uploaded himself.
     */
    public $avatar_url;

    /**
     * @var string|null About information.
     */
    public $about;

    /**
     * @var string Date and time when user was registered. Example: "2019-08-27 14:09:11+03"
     */
    public $created_date;
}
