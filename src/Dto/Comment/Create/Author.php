<?php

namespace AnyComment\Dto\Comment\Create;

class Author
{
    /**
     * @var string Author's name, first and last name or just one of them.
     */
    private string $name;
    /**
     * @var string Author's username.
     */
    private string $username;
    /**
     * @var string|null Author's email address.
     */
    private ?string $email;
    /**
     * @var int Author's sex. Available values: 0 - unknown, 1 - male, 2 - female
     */
    private int $sex;
    /**
     * @var string|null
     */
    private ?string $avatar;

    /**
     * Author constructor.
     * @param string $name
     * @param string $username
     * @param string $email
     * @param int|null $sex
     * @param string|null $avatar
     */
    public function __construct(
        string $name,
        string $username,
        ?string $email,
        int $sex = 0,
        ?string $avatar = null
    )
    {
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
        $this->sex = $sex;
        $this->avatar = $avatar;
    }
}
