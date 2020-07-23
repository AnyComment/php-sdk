<?php

require __DIR__ . '/../vendor/autoload.php';

use AnyComment\AnyComment;
use AnyComment\AnyCommentConfig;
use AnyComment\Dto\Comment\Create\Page;
use AnyComment\Dto\Comment\Create\Comment;
use AnyComment\Dto\Comment\Create\Author;

$config = new AnyCommentConfig('YOU_API_KEY');
$api = new AnyComment($config);


$page = new Page(
    'http://anycomment.io/demo',
    'Demo'
);
$comment = new Comment(
    1,
    null,
    1,
    'This is my comment',
    '127.0.0.1',
    '2020-07-05 13:02:22'
);
$author = new Author(
    'John Doe',
    'john.doe',
    'john.doe@example.com',
);
$createRequest = new \AnyComment\Dto\Comment\Create\CommentAddRequest(
    $page,
    $comment,
    $author
);

var_dump($api->getComment()->create($createRequest));
