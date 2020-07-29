<?php


namespace AnyComment\Dto\Comment\Create;


class CommentCreateRequest
{
    /**
     * @var Page
     */
    private $page;

    /**
     * @var Comment
     */
    private $comment;

    /**
     * @var Author
     */
    private $author;

    /**
     * CommentAddRequest constructor.
     * @param Page $page
     * @param Comment $comment
     * @param Author $author
     */
    public function __construct($page, $comment, $author)
    {
        $this->page = $page;
        $this->comment = $comment;
        $this->author = $author;
    }

    /**
     * Get list of params prepared for request.
     *
     * @return array
     * @throws \ReflectionException
     */
    public function getParams()
    {
        $params = $this->page->getParams();
        $params['comment'] = $this->comment->getParams();
        $params['author'] = $this->author->getParams();
        return $params;
    }
}
