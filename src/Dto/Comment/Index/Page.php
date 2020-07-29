<?php


namespace AnyComment\Dto\Comment\Index;


class Page
{
    /**
     * @var int Page id.
     */
    public $id;

    /**
     * @var string|null Page title when available.
     */
    public $page_title;

    /**
     * @var string Page URL. Example: "https://anycomment.io/demo".
     */
    public $url;

    /**
     * @var string Hashed version of URL. Hash is in md5. Example: "0a7cdb9fd0d8aedf7bd24cf1bc6d9665".
     */
    public $url_hash;

    /**
     * @var int Number of comments on this page.
     */
    public $comment_count;

    /**
     * @var string Date and time when page was created. Example: "2019-12-25 22:56:03+03".
     */
    public $created_date;
}
