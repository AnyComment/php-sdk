<?php

require __DIR__ . '/../vendor/autoload.php';

use AnyComment\AnyComment;
use AnyComment\AnyCommentConfig;

$config = new AnyCommentConfig('YOU_API_KEY');
$api = new AnyComment($config);

var_dump($api->getWebsite()->getInfo());
