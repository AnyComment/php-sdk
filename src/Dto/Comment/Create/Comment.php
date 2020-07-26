<?php

namespace AnyComment\Dto\Comment\Create;

class Comment
{
    /**
     * @var integer Comment's id.
     */
    private $id;

    /**
     * @var int|null Reference to parent comment id, null when comment is not referenced.
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

    /**
     * Comment constructor.
     * @param int $id
     * @param int|null $parentId
     * @param int $status
     * @param string $content
     * @param string $ip
     * @param string $createdDate
     */
    public function __construct(
        $id,
        $parentId,
        $status,
        $content,
        $ip,
        $createdDate
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
