<?php


namespace AnyComment\Dto\Comment\Create;


use ReflectionClass;
use ReflectionProperty;

class CommentAddRequest
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

    public function __construct(Page $page, Comment $comment, Author $author)
    {
        $this->page = $page;
        $this->comment = $comment;
        $this->author = $author;
    }

    public function getParams()
    {
        $params = $this->getParamsOf($this->page);
        $params['comment'] = $this->getParamsOf($this->comment);
        $params['author'] = $this->getParamsOf($this->author);
        return $params;
    }

    private function getParamsOf($instance)
    {
        $reflect = new ReflectionClass($instance);
        $props = $reflect->getProperties(ReflectionProperty::IS_PRIVATE);

        return $props;
    }
}
