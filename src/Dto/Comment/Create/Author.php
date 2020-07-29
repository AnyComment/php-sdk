<?php

namespace AnyComment\Dto\Comment\Create;

use AnyComment\Dto\BaseDto;

class Author extends BaseDto
{
    /**
     * @var string Author's name, first and last name or just one of them.
     */
    public $name;
    /**
     * @var string|null Author's username.
     */
    public $username;
    /**
     * @var string|null Author's email address.
     */
    public $email;
    /**
     * @var int Author's sex. Available values: 0 - unknown, 1 - male, 2 - female
     */
    public $sex;
    /**
     * @var string|null
     */
    public $avatar;

    /**
     * Author constructor.
     * @param string $name
     * @param string $username
     * @param string $email
     * @param int|null $sex
     * @param string|null $avatar
     */
    public function __construct(
        $name,
        $username = null,
        $email = null,
        $sex = 0,
        $avatar = null
    )
    {
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
        $this->sex = $sex;
        $this->avatar = $avatar;
    }
}
