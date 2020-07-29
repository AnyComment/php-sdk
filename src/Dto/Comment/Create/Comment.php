<?php

namespace AnyComment\Dto\Comment\Create;

use AnyComment\Dto\BaseDto;

class Comment extends BaseDto
{
    /**
     * @var integer Comment's id.
     */
    public $id;

    /**
     * @var int|null Reference to parent comment id, null when comment is not referenced.
     */
    public $parent_id;

    /**
     * @var integer Status of a comment. Available values: 0 - pending, 1 - approved, 2 - spam, 3 - deleted.
     */
    public $status;

    /**
     * @var string Comment's text.
     */
    public $content;

    /**
     * @var string Comment sender's IP.
     */
    public $ip;

    /**
     * @var string Created date in format: YYYY-mm-dd HH:ii:ss, e.g. 2019-08-25 13:01:47.
     */
    public $created_date;

    /**
     * Comment constructor.
     * @param int $id
     * @param int|null $parentId
     * @param int $status Status of a comment. Available values: 0 - pending, 1 - approved, 2 - spam, 3 - deleted.
     * @param string $content Comment's text.
     * @param string $ip Comment sender's IP.
     * @param string $createdDate Created date in format: YYYY-mm-dd HH:ii:ss, e.g. 2019-08-25 13:01:47.
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
