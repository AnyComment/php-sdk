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
     * @param string $pageUrl
     * @param string $pageTitle
     * @param string|null $pagePreviewUrl
     * @param string|null $pageAuthor
     */
    public function __construct(
        string $name,
        string $username,
        string $email,
        int $sex = null,
        string $avatar = null
    )
    {
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
        $this->sex = $sex;
        $this->avatar = $avatar;
    }
}
