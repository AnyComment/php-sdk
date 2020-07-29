<?php


namespace AnyComment\Dto\Page;


use AnyComment\Dto\Envelopes\ResponseEnvelope;

/**
 * Class CommentCount holds response from client/page/comment-count endpoint.
 *
 * @package AnyComment\Dto\Page
 */
class CommentCountResponse extends ResponseEnvelope
{
    /**
     * @var CommentCount
     */
    public $response;
}
