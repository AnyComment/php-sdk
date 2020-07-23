<?php


namespace AnyComment\Endpoints;

use AnyComment\Api;
use AnyComment\Dto\Website\AppInfo;

/**
 * Class Page represents class which communicates with page specific endpoints.
 *
 * @package AnyComment\Endpoints
 */
class Page
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
     * Get comment count for provided page URL.
     *
     * @param string $pageUrl Page URL for which to get comment count.
     * @return AppInfo
     */
    public function getCommentCount(string $pageUrl)
    {
        $response = $this->api->get('client/app/info', ['url' => $pageUrl]);
        return $this->api->mapResponse(
            $response,
            AppInfo::class
        );
    }
}
