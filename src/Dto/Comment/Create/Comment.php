<?php

namespace AnyComment\Dto\Comment\Create;

class Comment
{
    /**
     * @var integer Comment's id.
     */
    private $id;

    /**
     * @var string Reference to parent comment id.
     */
    private $parent_id;

    /**
     * @var integer Status of a comment. Available values: 0 - pending, 1 - approved, 2 - spam, 3 - deleted.
     */
    private $status;

    /**
     * @var string Comment's text.
     */
    private $content;

    /**
     * @var string Comment sender's IP.
     */
    private $ip;

    /**
     * @var string Created date in format: YYYY-mm-dd HH:ii:ss, e.g. 2019-08-25 13:01:47.
     */
    private $created_date;

    public function __construct(
        int $id,
        int $parentId = null,
        int $status,
        string $content,
        string $ip,
        string $createdDate
    )
    {
        $this->id = $id;
        $this->parent_id = $parentId;
        $this->status = $status;
        $this->content = $content;
        $this->ip = $ip;
        $this->created_date = $createdDate;
    }
}
