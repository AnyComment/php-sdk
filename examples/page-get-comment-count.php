<?php

require __DIR__ . '/../vendor/autoload.php';

use AnyComment\AnyComment;
use AnyComment\AnyCommentConfig;

$config = new AnyCommentConfig('YOU_API_KEY');
$api = new AnyComment($config);

// Please replace with your website page URL
$url = 'https://anycomment.io/demo';

var_dump($api->getPage()->getCommentCount($url));
