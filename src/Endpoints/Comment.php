<?php


namespace AnyComment\Endpoints;

use AnyComment\Dto\Comment\Index\CommentIndexResponse;
use AnyComment\Dto\Comment\Create\CommentCreateRequest;
use AnyComment\Dto\Comment\Create\CommentCreateResponse;
use AnyComment\Exceptions\RequestFailException;
use AnyComment\Exceptions\ClassMapException;
use AnyComment\Exceptions\UnexpectedResponseException;

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
     * @param CommentCreateRequest $commentCreate Comment data to be sent to the API.
     * @return CommentCreateResponse
     * @throws ClassMapException
     * @throws RequestFailException
     * @throws UnexpectedResponseException
     * @throws \ReflectionException
     */
    public function create($commentCreate)
    {
        $response = $this->getApi()->post('client/comment/add', $commentCreate->getParams());
        return $this->getApi()->mapResponse($response, CommentCreateResponse::class);
    }

    /**
     * Get list of comments.
     *
     * This endpoint returns all comments chronologically, there is no way to filter by page URL.
     *
     * @param string $createdDate If date is provided, comments would returned after the provided date.
     * @return CommentIndexResponse
     * @throws ClassMapException
     * @throws RequestFailException
     * @throws UnexpectedResponseException
     */
    public function getList($createdDate = null)
    {
        $response = $this->getApi()->get('client/comment/index', ['created_date' => $createdDate]);
        return $this->getApi()->mapResponse($response, CommentIndexResponse::class);
    }
}
