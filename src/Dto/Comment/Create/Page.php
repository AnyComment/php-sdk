<?php

namespace AnyComment\Dto\Comment\Create;

class Page
{
    /**
     * @var string Website page url, e.g. https://anycomment.io/demo/.
     */
    private $page_url;

    /**
     * @var string Website page title, e.g. "AnyComment - Demo"
     */
    private $page_title;

    /**
     * @var string|null Website page preview image URL (when available)
     */
    private $page_preview_url;

    /**
     * @var string|null
     */
    private $page_author;

    /**
     * @param string $pageUrl
     * @param string $pageTitle
     * @param string|null $pagePreviewUrl
     * @param string|null $pageAuthor
     */
    public function __construct(
        string $pageUrl,
        string $pageTitle,
        string $pagePreviewUrl = null,
        string $pageAuthor = null
    )
    {
        $this->page_url = $pageUrl;
        $this->page_title = $pageTitle;
        $this->page_preview_url = $pagePreviewUrl;
        $this->page_author = $pageAuthor;
    }
}
