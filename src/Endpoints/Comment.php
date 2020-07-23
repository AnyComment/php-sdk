<?php


namespace AnyComment\Endpoints;

use AnyComment\Api;
use AnyComment\Dto\Comment\Create\CommentAddRequest;
use AnyComment\Dto\Comment\Create\CommentAddResponse;
use AnyComment\Exceptions\RequestFailException;
use AnyComment\Exceptions\ClassMapException;

/**
 * Class Comment represents class which communicates with comment specific endpoints.
 *
 * @package AnyComment\Endpoints
 */
class Comment
{
    /**
     * @var Api
     */
    private $api;

    /**
     * Website constructor.
     * @param Api $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

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
        $response = $this->api->post('client/comment/add', $commentCreate->getParams());
        return $this->api->mapResponse($response, CommentAddResponse::class);
    }
}
