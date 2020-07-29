<?php


namespace AnyComment\Dto\Comment\Index;

use AnyComment\Dto\Envelopes\ItemResponse;

class CommentIndexResponse extends ItemResponse
{
    /**
     * @var Comment[]
     */
    public $items;

    /**
     * @var User[]
     */
    public $users;

    /**
     * @var Page[]
     */
    public $pages;
}
