<?php

require __DIR__ . '/../vendor/autoload.php';

use AnyComment\Api;
use AnyComment\Config;

$config = new Config('YOU_API_KEY');
$api = new Api($config);

// Please replace with your website page URL
$url = 'https://anycomment.io/demo';

var_dump($api->getPage()->getCommentCount($url));
