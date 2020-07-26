<?php


namespace AnyComment\Dto\Page;


/**
 * Class CommentCount holds response from client/page/comment-count endpoint.
 *
 * @package AnyComment\Dto\Page
 */
class CommentCount
{
    /**
     * @var integer Number of comments on requested page.
     */
    public $count;
}
