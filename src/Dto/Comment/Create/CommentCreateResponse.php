<?php


namespace AnyComment\Dto\Comment\Create;


use AnyComment\Dto\Envelopes\ResponseEnvelope;

class CommentCreateResponse extends ResponseEnvelope
{
    /**
     * @var NewComment
     */
    public $response;
}
