<?php

namespace AnyComment\Dto\Comment\Create;

use AnyComment\Dto\BaseDto;

class Page extends BaseDto
{
    /**
     * @var string Website page url, e.g. https://anycomment.io/demo/.
     */
    public $page_url;

    /**
     * @var string Website page title, e.g. "AnyComment - Demo"
     */
    public $page_title;

    /**
     * @var string|null Website page preview image URL (when available)
     */
    public $page_preview_url;

    /**
     * @var string|null
     */
    public $page_author;

    /**
     * @param string $pageUrl
     * @param string $pageTitle
     * @param string|null $pagePreviewUrl
     * @param string|null $pageAuthor
     */
    public function __construct(
        $pageUrl,
        $pageTitle,
        $pagePreviewUrl = null,
        $pageAuthor = null
    )
    {
        $this->page_url = $pageUrl;
        $this->page_title = $pageTitle;
        $this->page_preview_url = $pagePreviewUrl;
        $this->page_author = $pageAuthor;
    }
}
