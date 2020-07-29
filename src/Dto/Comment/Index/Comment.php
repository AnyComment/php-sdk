<?php


namespace AnyComment\Dto\Comment\Index;

class Comment
{
    /**
     * @var int Comment unique id. Example: 721287
     */
    public $id;

    /**
     * @var int Website page id. Example: "929153"
     */
    public $website_page_id;

    /**
     * @var int|null Reference to parent comment, when exists. NULL when not referenced.
     */
    public $parent_id;

    /**
     * @var int Comment author.
     */
    public $author_id;

    /**
     * @var string|null Example: "This is my comment".
     */
    public $content;

    /**
     * @var int Comment depth in the tree. Example: "0".
     */
    public $depth;

    /**
     * @var int Number of times this comment was shared. Example: "0".
     */
    public $share_count;

    /**
     * @var int Number of times comment was liked. Example: "0"
     */
    public $like_count;

    /**
     * @var int Number of times comment was disliked. Example: "0"
     */
    public $dislike_count;

    /**
     * @var string|null Import meta. It is like a label which can be used to identify where comment is coming from.
     * Example: "api:1"
     */
    public $import_meta;

    /**
     * @var string Date and time when comment was updated. Example: "2020-07-29 09:44:14+03"
     */
    public $updated_date;

    /**
     * @var string Date and time when comment was created. Example: "2020-07-29 09:44:14+03"
     */
    public $created_date;
}
