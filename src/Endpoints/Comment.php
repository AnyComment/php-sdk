<?php


namespace AnyComment\Endpoints;

use AnyComment\Request;
use AnyComment\Dto\Comment\Create\CommentAddRequest;
use AnyComment\Dto\Comment\Create\CommentAddResponse;
use AnyComment\Exceptions\RequestFailException;
use AnyComment\Exceptions\ClassMapException;

/**
 * Class Comment represents class which communicates with comment specific endpoints.
 *
 * @package AnyComment\Endpoints
 */
class Comment extends BaseEndpoint
{
    /**
     * Create new comment.
     *
     * @param CommentAddRequest $commentCreate Comment data to be sent to the API.
     * @return CommentAddResponse
     * @throws RequestFailException
     * @throws ClassMapException
     */
    public function create(CommentAddRequest $commentCreate)
    {
        $response = $this->getApi()->post('client/comment/add', $commentCreate->getParams());
        return $this->getApi()->mapResponse($response, CommentAddResponse::class);
    }
}
