<?php


namespace AnyComment\Endpoints;

use AnyComment\Dto\Page\CommentCount\CommentCountResponse;

/**
 * Class Page represents class which communicates with page specific endpoints.
 *
 * @package AnyComment\Endpoints
 */
class Page extends BaseEndpoint
{
    /**
     * Get comment count for provided page URL.
     *
     * @param string $pageUrl Page URL for which to get comment count.
     * @return CommentCountResponse
     * @throws \AnyComment\Exceptions\ClassMapException
     * @throws \AnyComment\Exceptions\RequestFailException
     * @throws \AnyComment\Exceptions\UnexpectedResponseException
     */
    public function getCommentCount($pageUrl)
    {
        $response = $this->getApi()->get('client/page/comment-count', ['url' => $pageUrl]);
        return $this->getApi()->mapResponse(
            $response,
            CommentCountResponse::class
        );
    }
}
