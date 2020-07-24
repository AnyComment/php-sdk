<?php


namespace AnyComment\Endpoints;

use AnyComment\Request;
use AnyComment\Dto\Website\AppInfo;

/**
 * Class Page represents class which communicates with page specific endpoints.
 *
 * @package AnyComment\Endpoints
 */
class Page
{
    /**
     * @var Request
     */
    private $api;

    /**
     * Website constructor.
     * @param Request $api
     */
    public function __construct(Request $api)
    {
        $this->api = $api;
    }

    /**
     * Get comment count for provided page URL.
     *
     * @param string $pageUrl Page URL for which to get comment count.
     * @return AppInfo
     */
    public function getCommentCount($pageUrl)
    {
        $response = $this->api->get('client/app/info', ['url' => $pageUrl]);
        return $this->api->mapResponse(
            $response,
            AppInfo::class
        );
    }
}
