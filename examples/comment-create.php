<?php

require __DIR__ . '/../vendor/autoload.php';

use AnyComment\Api;
use AnyComment\Config;
use AnyComment\Dto\Comment\Create\Page;
use AnyComment\Dto\Comment\Create\Comment;
use AnyComment\Dto\Comment\Create\Author;
use AnyComment\Dto\Comment\Create\CommentCreateRequest;

$config = new Config('YOU_API_KEY');
$api = new Api($config);


$page = new Page(
    'https://anycomment.io/demo',
    'Demo'
);
$comment = new Comment(
    1,
    null,
    1,
    'This is my comment',
    '127.0.0.1',
    date('Y-m-d H:i:s')
);
$author = new Author('John Doe');

$createRequest = new CommentCreateRequest(
    $page,
    $comment,
    $author
);

var_dump($api->getComment()->create($createRequest));
