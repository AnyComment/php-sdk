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

    /**
     * CommentAddRequest constructor.
     * @param Page $page
     * @param Comment $comment
     * @param Author $author
     */
    public function __construct(Page $page, Comment $comment, Author $author)
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
        $params = $this->getParamsOf($this->page);
        $params['comment'] = $this->getParamsOf($this->comment);
        $params['author'] = $this->getParamsOf($this->author);
        return $params;
    }

    /**
     * Get list of properties for given instance.
     *
     * @param $instance
     * @return array
     * @throws \ReflectionException
     */
    private function getParamsOf($instance)
    {
        $reflect = new ReflectionClass($instance);
        $props = $reflect->getProperties(ReflectionProperty::IS_PRIVATE);

        return $props;
    }
}
