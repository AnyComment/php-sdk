<?php

namespace AnyComment\Dto\Comment\Create;

class Author
{
    /**
     * @var string Author's name, first and last name or just one of them.
     */
    private $name;
    /**
     * @var string Author's username.
     */
    private $username;
    /**
     * @var string Author's email address.
     */
    private $email;
    /**
     * @var int Author's sex. Available values: 0 - unknown, 1 - male, 2 - female
     */
    private $sex;
    /**
     * @var string|null
     */
    private $avatar;

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
        $username,
        $email,
        $sex = null,
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
